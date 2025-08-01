<?php

use App\Http\Controllers\OrderBookController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    return response()->json([ 'status' => 'success', 'message' => 'MFC Version 1.0', 'data' => [ 'v1' => url('v1/'), 's' => $_SERVER['REMOTE_ADDR'], ]]);
});

Route::prefix('/v1')->group(function () {
    Route::prefix('/orders')->group(function () {
        Route::get('/global', [OrderBookController::class, 'globalOrdering'])->name('order globally');
        Route::post('/donate', [OrderBookController::class, 'donateCopies'])->name('donate a copy');
        Route::post('/local', [OrderBookController::class, 'localOrdering'])->name('order locally');
    });

    Route::post('/book-session', [OrderBookController::class, 'bookASession'])->name('book a session');


});

