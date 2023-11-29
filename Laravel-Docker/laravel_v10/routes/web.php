<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; //User Controller
use App\Http\Controllers\NoteController; //Note Controller

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

// only views
Route::view('/home', 'index')->name('home');
Route::view('/sobre-nosotros', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

// Controllers
Route::get('/users', [UserController::class, 'index'])->name('user.index');
// antes era...Route::get('/users', 'UserController@index')->name('user.index');

Route::get('/create', [UserController::class, 'create'])->name('user.create');

// Rutas Dinamicas
// Route::get('/note/{id?}', [NoteController::class, 'index'])->name('note.index');

// Rutas de Note CRUD
Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store'); //guaradar datos