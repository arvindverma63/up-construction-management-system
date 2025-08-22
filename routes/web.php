<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');


Route::get('/admin/index', [AdminPageController::class, 'index'])->name('admin.index');
Route::get('/admin/auth', [AdminPageController::class, 'auth'])->name('auth');
Route::resource('categories', CategoryController::class);



Route::prefix('auth')->group(function () {
    // Public routes
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('resend-verification', [AuthController::class, 'resendVerification']); // unauthenticated resend

    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('verify-email', [AuthController::class, 'verifyEmail']); // signed verification link
        Route::post('resend-verification-auth', [AuthController::class, 'resendVerification']); // resend while logged in
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
        Route::put('update-profile', [AuthController::class, 'updateProfile']);
        Route::get('check-role/{role}', [AuthController::class, 'checkRole']);
        Route::get('users', [AuthController::class, 'index']); // admin only
    });
});

/**
 * Email Verification Routes
 */
Route::middleware(['auth:sanctum'])->group(function () {
    // Verify email (signed link from Laravel notification)
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill(); // mark email as verified
        return response()->json(['message' => 'Email verified successfully']);
    })->middleware(['signed'])->name('verification.verify');

    // Resend verification email (when logged in)
    Route::post('/email/resend', [AuthController::class, 'resendVerification'])->name('verification.resend');
});
