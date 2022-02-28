<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| hola
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clients.index');
Route::get('/clients/add', [ClienteController::class, 'create'])->name('clients.add');
Route::get('/clients/{id}', [ClienteController::class, 'edit'])->name('clients.edit');
Route::post('/clients/add', [ClienteController::class, 'store']);
Route::delete('/clients/{id}', [ClienteController::class, 'destroy'])->name('clients.destroy');
Route::put('/clients/{id}', [ClienteController::class, 'update'])->name('clients.update');

Route::get('/sucursales', [SucursalController::class, 'index'])->name('sucursales.index');
Route::get('/sucursales/add', [SucursalController::class, 'create'])->name('sucursales.add');
Route::get('/sucursales/{id}', [SucursalController::class, 'edit'])->name('sucursales.edit');
Route::post('/sucursales/add', [SucursalController::class, 'store']);
Route::put('/sucursales/{id}', [SucursalController::class, 'update'])->name('sucursales.update');
Route::delete('/sucursales/{id}', [SucursalController::class, 'destroy'])->name('sucursales.destroy');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/add', [UsuarioController::class, 'create'])->name('usuarios.add');
Route::get('/usuarios/{id}', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::post('/usuarios/add', [UsuarioController::class, 'store']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

Auth::routes(["register" => false, 'reset' => false]);
