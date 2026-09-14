<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('guest.beranda');
});
