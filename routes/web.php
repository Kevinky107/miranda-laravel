<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [RoomController::class, 'home'])->name('contact.home');

Route::get('/about-us', function () {
    return view('miranda/about-us');
});

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

Route::get('/offers', [RoomController::class, 'offers'])->name('contact.offers');

Route::get('/room-details', function () {
    return view('miranda/room-details');
});

Route::get('/rooms', [RoomController::class, 'index'])->name('contact.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('activities', ActivityController::class);
    
});

require __DIR__.'/auth.php';
