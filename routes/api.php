<?php

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
        Route::get('/global', [OrderBookController::class, 'globalOrdering'])->name('order globally');
        Route::post('/local', [OrderBookController::class, 'localOrdering'])->name('order locally');
        Route::post('/donate', [OrderBookController::class, 'donateCopies'])->name('donate a copy');
    });

    Route::post('/book-session', [OrderBookController::class, 'bookASession'])->name('book a session');


});


