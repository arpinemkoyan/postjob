<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('layout');
});


Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('login', [UserController::class, 'userLogin'])->name('login.user');
Route::get('registration', [UserController::class, 'registration'])->name('register');
Route::post('user-registration', [UserController::class, 'userRegistration'])->name('register.user');
Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('post', [PostController::class, 'layout'])->name('layout');
//Route::get('create', [PostController::class, 'create'])->name('posts.create');
//Route::post('store', [PostController::class, 'store'])->name('posts.store');
Route::resources([
    'posts' => PostController::class,
]);

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});
