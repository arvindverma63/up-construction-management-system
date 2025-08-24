<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserControllers\PageController as UserControllersPageController;
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

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/index', [AdminPageController::class, 'index'])->name('admin.index');
    Route::get('/admin/auth', [AdminPageController::class, 'auth'])->name('auth');
    Route::resource('categories', CategoryController::class);
});

Route::middleware(['role:user'])->group(function () {
    Route::get('/user/index', [UserControllersPageController::class, 'index'])->name('user.dashboard');
});


Route::prefix('auth')->group(function () {
    // Public routes
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get("/login", function () {
        return view('website.index');
    })->name('login');

    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('user', [AuthController::class, 'user']);
        Route::put('update-profile', [AuthController::class, 'updateProfile']);
        Route::get('check-role/{role}', [AuthController::class, 'checkRole']);
        Route::get('users', [AuthController::class, 'index']); // admin only
    });
});
