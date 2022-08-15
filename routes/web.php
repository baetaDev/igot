<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//INICIO ROTAS USUARIOS COMUNS
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//FIM ROTAS USUARIOS COMUNS
//INICIO USUARIOS ADM
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('adminUsuarios');

//FIM ROTAS USUARIOS ADM