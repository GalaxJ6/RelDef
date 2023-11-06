<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroDatos;

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
    return view('estructura');
});


Route::get('/registroDatos', [RegistroDatos::class, 'registro']);
// Route::get('/administrador', [RegistroDatos::class, 'index'])->name('administrador.index');
// Route::get('/estructura', [RegistroDatos::class, 'registro']);