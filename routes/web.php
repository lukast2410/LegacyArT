<?php

use App\Http\Controllers\ArtController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

// TODO: Add necessary middleware for these routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/art/{id}', [ArtController::class, 'show'])->name('art.detail');
Route::get('/profile/{nickname}', [UserController::class, 'show'])->name('user.profile');

Route::post('/submit-bid', [BidController::class, 'store'])->name('submit.bid');
Route::delete('/cancel-bid/{id}', [BidController::class, 'destroy'])->name('cancel.bid');
Route::post('/accept-offer', [ArtController::class, 'accept_offer'])->name('accept.offer');

Route::get('/create-art', [ArtController::class, 'create'])->name('create.art');
Route::post('/insert-art', [ArtController::class, 'store'])->name('insert.art');

Route::get('/request-creator', [RequestCreatorController::class, 'create'])->name('request.creator');
Route::post('/request', [RequestCreatorController::class, 'store'])->name('request');
Route::get('/view-requests', [RequestCreatorController::class, 'index'])->name('view.requests');

Route::get('/bid/ongoing', [BidController::class, 'index'])->name('bid.ongoing');
Route::get('/bid/history', [BidController::class, 'history'])->name('bid.history');
Route::get('/transaction-history', [BidController::class, 'transaction_history'])->name('transaction.history');
Route::get('/sell-history', [BidController::class, 'sell_history'])->name('sell.history');

Route::get('/revenue', [BidController::class, 'revenue'])->name('revenue');
Route::put('/reject-request/{id}', [RequestCreatorController::class, 'reject'])->name('reject.request');
Route::put('/accept-request/{id}', [RequestCreatorController::class, 'accept'])->name('accept.request');

// TODO: Add middleware for resend verification
Route::post('/email/resend-verification', [VerificationController::class, 'resendVerification'])->name('resend.verification');

// TODO: Add routes for handle Google OAuth2
