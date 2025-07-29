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



// Route::get('/127.0.0.1:8000/{code}', [shortnerController::class, 'redirect'])->name('reports-annual')->where('code', '[0-9]+[a-z]+[A-Z]');

Route::get('{shortCode}', [shortnerController::class, 'redirect'])->where('shortCode', '[A-Za-z0-9]+');
