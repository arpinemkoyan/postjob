<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\JobController;
use App\Http\Controllers\Dashboard\CompanyDetailsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Dashboard\CandidateController;

Route::get('/', function () {
    return view('layout');
});


Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('login', [UserController::class, 'userLogin'])->name('login.user');
Route::get('registration', [UserController::class, 'registration'])->name('register');
Route::post('user-registration', [UserController::class, 'userRegistration'])->name('register.user');
Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('post', [JobController::class, 'layout'])->name('layout');


Route::middleware(['auth'])->group(function () {
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::get('job', [JobController::class, 'layout'])->name('layout');

    Route::resources([
        'jobs' => JobController::class,
    ]);
    Route::resources([
        'companyDetails' => CompanyDetailsController::class,
    ]);
    Route::resources([
        'categories' => CategoryController::class,
    ]);
    Route::resources([
        'candidates' => CandidateController::class,
    ]);
    Route::post('candidates/filter', [CandidateController::class, 'filter'])->name('candidates.filter');


});
