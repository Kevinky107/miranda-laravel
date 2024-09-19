<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('miranda/index');
});
Route::get('/about-us', function () {
    return view('miranda/about-us');
});
Route::get('/contact', function () {
    return view('miranda/contact');
});
Route::get('/offers', function () {
    return view('miranda/offers');
});
Route::get('/room-details', function () {
    return view('miranda/room-details');
});
Route::get('/rooms', function () {
    return view('miranda/rooms');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('activities', ActivityController::class);
    
});

require __DIR__.'/auth.php';
