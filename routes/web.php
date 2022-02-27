<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cliente;

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

// Route::get('clientes', function(){
// 	return view('clientes.agregar');
// });
Route::get('/clients', function () {
	return view('clients.index');
})->name('clients.index');

Route::get('/clients/add', function () {
    return view('clients.add');
})->name('clients.add');

Route::post('/clients/add', function (Request $request) {
    $newCliente = new Cliente;
    $newCliente->nombre = $request->input('nombre');
    $newCliente->codigo = $request->input('codigo');
    $newCliente->rif = $request->input('rif');
    $newCliente->direccion = $request->input('direccion');
    $newCliente->telefono = $request->input('telefono');
    $newCliente->email = $request->input('email');
    $newCliente->save();
    echo $request->input('nombre');
    //return redirect()->route('clients.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
