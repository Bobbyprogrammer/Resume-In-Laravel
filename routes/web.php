<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('skill', function () {
    return view('skill');
})->name('skill');


Route::get('service', [ServiceController::class, 'index'])->name('service');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
