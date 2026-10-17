<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});


Route::view('/services', 'services.services')->name('services.index');

Route::view('/booking', 'booking.booking')->name('booking.create');
