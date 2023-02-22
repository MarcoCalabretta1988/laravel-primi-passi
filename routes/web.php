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
    $message = 'This is my first app Laravel';
    return view('home', compact('message'));
})->name('index');

Route::get('/features', function () {
    $title = 'FEATURES';
    return view('features', compact('title'));
})->name('features');

Route::get('/pricing', function () {
    $title = 'PRICING';
    return view('pricing', compact('title'));
})->name('pricing');

Route::get('/disabled', function () {
    $title = 'DISABLED';
    return view('disabled', compact('title'));
})->name('disabled');
