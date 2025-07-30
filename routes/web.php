<?php

use App\Http\Controllers\OrderBookController;
use App\Mail\SendQuickMSG;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([ 'status' => 'success', 'message' => 'MFC Version 1', 'data' => [ 'v1' => url('api/v1/'), 's' => $_SERVER['REMOTE_ADDR'], ]]);
});

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::prefix('/v1')->group(function () {
    Route::prefix('/orders')->group(function () {
        Route::get('/global', [OrderBookController::class, 'globalOrdering']);
    });
});

// Route::get('/email-testing', function () {
//     $data = (object)[
//         'firstname' => 'Praise',
//         'lastname' => 'Ebuka',
//         'email' => 'test@example.com',
//         'business_name' => 'checkers ltd',
//         'type_of_staff' => 'One solid strengthed guy',
//         'start_date' => '3rd of July 2025',
//         'message' => 'Hello, I am testing the view.'
//     ];

//     if (request()->query('send') == 'true') {
//         Mail::to('praise.njoga@gmail.com')->send(new SendQuickMSG($data));
//     }

//     return (new SendQuickMSG($data))->render();
// });


require __DIR__.'/auth.php';
