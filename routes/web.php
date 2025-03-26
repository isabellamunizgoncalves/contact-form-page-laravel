<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/about', function () {
    return ['foo' => 'bar'];
});*/

// RETORNANDO UMA VISUALIZAÇÃO CHAMADA ABOUT

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

