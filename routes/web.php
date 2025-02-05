<?php

use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('toys', ToyController::class);

Route::get('/page', function(){
    return view('master_page');
});

Route::get('/page', function(){
    return view('components.home');
});

