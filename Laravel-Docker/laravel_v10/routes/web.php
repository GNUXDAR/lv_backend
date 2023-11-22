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
    return view('welcome');
});


Route::view('/home', 'index')->name('home');
Route::view('/sobre-nosotros', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');