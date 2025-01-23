<?php

use App\Http\Controllers\ReadAllBlogsController;
use App\Http\Controllers\CreateBlogController;
use App\Http\Controllers\UpdateBlogController;
use App\Http\Controllers\DeleteBlogController;

use App\Http\Controllers\ReadAllUsersController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\UpdateUserController;
use App\Http\Controllers\DeleteUserController;

use App\Http\Controllers\CreateReviewController;
use App\Http\Controllers\UpdateReviewController;
use App\Http\Controllers\DeleteReviewController;
use App\Http\Controllers\ReadAllReviewsController;

use App\Http\Controllers\ContactFormController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Authenticated user route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Blog routes
Route::prefix('blogs')->group(function () {
    Route::post('/', CreateBlogController::class);
    Route::get('/', ReadAllBlogsController::class);
    Route::put('/{id}', UpdateBlogController::class);
    Route::delete('/{id}', DeleteBlogController::class);
});

// User routes
Route::prefix('users')->group(function () {
    Route::post('/', CreateUserController::class);
    Route::get('/', ReadAllUsersController::class);
    Route::put('/{id}', UpdateUserController::class);
    Route::delete('/{id}', DeleteUserController::class);
});

// Review routes
Route::prefix('reviews')->group(function () {
    Route::post('/', CreateReviewController::class);
    Route::get('/', ReadAllReviewsController::class);
    Route::put('/{id}', UpdateReviewController::class);
    Route::delete('/{id}', DeleteReviewController::class);
});

// Contact form route
Route::post('/contact', [ContactFormController::class, 'store']);
