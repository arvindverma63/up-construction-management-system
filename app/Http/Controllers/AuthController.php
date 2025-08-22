<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;

class AuthController extends Controller
{
    /**
     * Register a new user with email verification
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,contractor,admin'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        event(new Registered($user)); // triggers email verification

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'User registered successfully. Please verify your email.',
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    /**
     * Login user and create token
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login credentials',
            ], 401);
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            // Resend email automatically for better UX
            $user->sendEmailVerificationNotification();
            return response()->json([
                'message' => 'Email not verified. Verification link resent to your email.',
            ], 403);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    /**
     * Verify email address (using signed link)
     */
    public function verifyEmail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return response()->json([
                'message' => 'Email already verified',
            ], 200);
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return response()->json([
            'message' => 'Email verified successfully',
        ], 200);
    }

    /**
     * Resend email verification
     */
    public function resendVerification(Request $request)
    {
        // If authenticated
        if ($request->user()) {
            $user = $request->user();
        } else {
            // Allow resend by email for unauthenticated users
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'exists:users,email'],
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors(),
                ], 422);
            }

            $user = User::where('email', $request->email)->first();
        }

        if ($user->hasVerifiedEmail()) {
            return response()->json([
                'message' => 'Email already verified',
            ], 200);
        }

        $user->sendEmailVerificationNotification();

        return response()->json([
            'message' => 'Verification email resent successfully',
        ], 200);
    }

    /**
     * Logout user (Revoke the token)
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Successfully logged out',
        ], 200);
    }

    /**
     * Get authenticated user
     */
    public function user(Request $request)
    {
        return response()->json([
            'user' => $request->user(),
        ], 200);
    }

    /**
     * Update user profile
     */
    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $validator = Validator::make($request->all(), [
            'name' => ['sometimes', 'string', 'max:255'],
            'email' => ['sometimes', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['sometimes', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = [];
        if ($request->filled('name')) $data['name'] = $request->name;
        if ($request->filled('email')) {
            $data['email'] = $request->email;
            $data['email_verified_at'] = null; // reset verification
        }
        if ($request->filled('password')) $data['password'] = Hash::make($request->password);

        $user->update($data);

        if (isset($data['email'])) {
            $user->sendEmailVerificationNotification();
        }

        return response()->json([
            'message' => 'Profile updated successfully' . (isset($data['email']) ? ' Please verify your new email.' : ''),
            'user' => $user,
        ], 200);
    }

    /**
     * Check user role
     */
    public function checkRole(Request $request, $role)
    {
        $user = $request->user();

        if ($user->role !== $role) {
            return response()->json([
                'message' => 'Unauthorized: User does not have the required role',
            ], 403);
        }

        return response()->json([
            'message' => 'User has the required role',
            'role' => $user->role,
        ], 200);
    }

    /**
     * Get all users (Admin only)
     */
    public function index(Request $request)
    {
        if ($request->user()->role !== 'admin') {
            return response()->json([
                'message' => 'Unauthorized: Only admins can view all users',
            ], 403);
        }

        $users = User::all();

        return response()->json([
            'users' => $users,
        ], 200);
    }
}
