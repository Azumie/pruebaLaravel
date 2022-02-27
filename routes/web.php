<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clients.index');
Route::get('/clients/add', [ClienteController::class, 'create'])->name('clients.add');
Route::get('/clients/{id}', [ClienteController::class, 'edit'])->name('clients.edit');
Route::post('/clients/add', [ClienteController::class, 'store']);
Route::delete('/clients/{id}', [ClienteController::class, 'destroy'])->name('clients.destroy');
Route::put('/clients/{id}', [ClienteController::class, 'update'])->name('clients.update');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
