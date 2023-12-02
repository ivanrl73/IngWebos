<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AuthController;
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
Route::get('/registro', function () {
    return view('registro');
});

Route::get('/Inisesion', function () {
    return view('Inisesion');
});

Route::get('/login', function () {
    return view('login');
});


//Posts endpoint
Route::middleware(['web'])->group(function () {
   Route::get('/registro', [RegistroController::class, 'index'])->name('registro.form');
   Route::post('/registro', [RegistroController::class, 'registrarUsuario'])->name('registro.submit');
   Route::post('/registrar', [RegistroController::class, 'registrarUsuario']);

   
   Route::get('/posts', [PostsController::class, 'index']);
   // ...


});

Route::middleware(['auth'])->group(function () {
    


    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
