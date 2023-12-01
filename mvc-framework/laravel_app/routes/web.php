<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistroController;

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
    return view('InicioR');
});

//Posts endpoint
Route::middleware(['web'])->group(function () {
    Route::get('/posts', [PostsController::class, 'index']);
    Route::post('/registrar', [RegistroController::class, 'registrarUsuario']);
    Route::post('/registro', 'AuthController@registro');

    Route::post('/registro', 'RegistroController@registrarUsuario');

});






