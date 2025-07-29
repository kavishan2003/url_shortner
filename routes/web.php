<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shortnerController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/shortner', function () {
    return view('shortner');
})->name('shortner');



Route::middleware('throttle:60,1')->group(function () {

    Route::get('/url-shortner', [shortnerController::class, 'shorten']);

    Route::get('{shortCode}', [shortnerController::class, 'redirect'])->where('shortCode', '[A-Za-z0-9]+');

    // Route::post('/send-data', [shortnerController::class, 'handleData']);
});
