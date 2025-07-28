<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shortnerController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/shortner', function () {
    return view('shortner');
})->name('shortner');



Route::get('/url-shortner', [shortnerController::class, 'shorten']);


// Route::get('')