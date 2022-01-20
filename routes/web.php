<?php

use App\Http\Controllers\ArtController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\RequestCreatorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{nickname}', [UserController::class, 'show'])->name('user.profile');
Route::get('/art/{id}', [ArtController::class, 'show'])->name('art.detail');
Route::post('/email/resend-verification', [VerificationController::class, 'resendVerification'])->middleware(['auth', 'throttle:6,1'])->name('resend.verification');

// For User except admin
Route::middleware(['auth', 'not.admin'])->group(function() {
  Route::get('/bid/ongoing', [BidController::class, 'index'])->name('bid.ongoing');
  Route::get('/bid/history', [BidController::class, 'history'])->name('bid.history');
  Route::get('/transaction-history', [BidController::class, 'transaction_history'])->name('transaction.history');
  Route::post('/submit-bid', [BidController::class, 'store'])->name('submit.bid');
  Route::delete('/cancel-bid/{id}', [BidController::class, 'destroy'])->name('cancel.bid');
});

// Only for creator
Route::middleware(['auth', 'verified', 'creator'])->group(function() {
  Route::get('/create-art', [ArtController::class, 'create'])->name('create.art');
  Route::post('/accept-offer', [ArtController::class, 'accept_offer'])->name('accept.offer');
});

// User Only
Route::middleware(['auth', 'verified', 'user.only'])->group(function() {
  Route::get('/request-creator', [RequestCreatorController::class, 'create'])->name('request.creator');
  Route::post('/request', [RequestCreatorController::class, 'store'])->name('request');
  Route::get('/my-request', [RequestCreatorController::class, 'my_request'])->name('my.request');
});

// Admin Only
Route::middleware(['auth', 'admin'])->group(function() {
  Route::get('/revenue', [BidController::class, 'revenue'])->name('revenue');
  Route::get('/view-requests', [RequestCreatorController::class, 'index'])->name('view.requests');
});