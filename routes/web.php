<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $name = 'Matteo';

    return view('home', compact('name'));
})->name('home');

Route::get('/world', function () {
    $languages = ['Inglese', 'Italiano', 'Spagnolo','Giapponese'];

    return view('world', ['languages' => $languages]);
})->name('world');
