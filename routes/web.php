<?php

use App\Http\Controllers\AdminBorroweredBooksController;
use App\Http\Controllers\AdminPlaceController;
use App\Http\Controllers\AdminRequestController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('visitors', [VisitorController::class, 'index'])->name('visitors');
    Route::get('visitors/filter', [VisitorController::class, 'filter'])->name('visitors.filter');
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('places', AdminPlaceController::class);
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');
    Route::get('reviews/view/{id}', [ReviewController::class, 'reviews'])->name('reviews.view');
});


Route::get("/admin", [LoginController::class, 'index'])->name('admin.login');
Route::post("/admin", [LoginController::class, 'login']);



Route::group(['middleware' => ['auth']], function () {
    Route::delete('delete', [DeleteController::class, 'delete'])->name('delete');
    Route::delete('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/place/{id}', [HomeController::class, 'details'])->name('place.details');
Route::post('/place/{id}', [HomeController::class, 'review']);
Route::get('/place/360view/{id}', [HomeController::class, 'view'])->name('place.360view');
Route::get('/places', [HomeController::class, 'places'])->name('places');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);