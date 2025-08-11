<?php

use App\Http\Controllers\BookSessionsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    return response()->json([ 'status' => 'success', 'message' => 'MFC Version 1.0', 'data' => [ 'v1' => url('api/v1/'), 's' => $_SERVER['REMOTE_ADDR'], ]]);
});

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


Route::prefix('/v1')->group(function () {
    Route::prefix('/orders')->group(function () {
        Route::post('/global', [OrderBookController::class, 'globalOrdering'])->name('order globally');
        Route::post('/local', [OrderBookController::class, 'localOrdering'])->name('order locally');
        Route::post('/donate', [OrderBookController::class, 'donateCopies'])->name('donate a copy');
    });

    Route::post('/book-free-session', [BookSessionsController::class, 'bookFreeSession'])->name('book free session');
    Route::post('/book-paid-session', [BookSessionsController::class, 'bookPaidSession'])->name('book paid session');

    # Subscribe to our newsletter
    Route::post('/subscribe-newsletter', [NewsletterController::class, 'subscribe'])->name('subscribe to our newsletter');
    
    # Invite to Speak
    Route::post('/invite', [NewsletterController::class, 'inviteToSpeak'])->name('invite to speak');


});


