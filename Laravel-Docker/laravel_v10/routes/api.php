<?php

use App\Http\Controllers\AuthController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ExampleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Hemos creado aqui, pero deberia hacerse en un controller
// Route::get('/user', function (Request $request) {
//     $user = User::find(3);
//     return new UserResource($user);
// });

// Route::middleware('example')->get('/example', [ExampleController::class, 'index']);
Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');

// proteccion de grupo de rutas
Route::middleware('example')->group(function(){
    Route::get('/example', [ExampleController::class, 'index']);
    // otras rutas
});

// Aplicar ambos middleware a la mayoría de las rutas
// Route::middleware(['auth', 'log'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
//     Route::get('/admin/users', [AdminController::class, 'listUsers']);

    // Excluir el middleware 'log' en la ruta de configuración
//     Route::get('/admin/settings', [AdminController::class, 'settings'])->withoutMiddleware('log');
// });