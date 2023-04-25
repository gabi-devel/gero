<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CarreraController;

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
    return view('inicio');
});

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');

Route::get('/carreras', function () {
    return view('carreras');
})->name('carreras');

/* Route::get('/carrera', function () {
    return view('carrera');
}); */
Route::get('/carrera/{indice}', [CarreraController::class, 'mostrarCarrera'])->name('carrera');


/* Me agrega al route list el método saludar */
Route::get('saludar/{usuario}', [MenuController::class, 'saludar'])->name('saludar');
Route::resource('menu', MenuController::class); 