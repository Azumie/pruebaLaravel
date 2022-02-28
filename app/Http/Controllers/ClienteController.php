<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cliente;
use \App\Models\Sucursal;
use \App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('clients.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        $sucursales = Sucursal::all();
        return view('clients.add', ['sucursales' => $sucursales]);
    }

    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente;
        $cliente->create($request->all());
        return redirect()->route('clients.index')->with('info', 'Cliente Agregado correctamente');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clients.edit', ['client' => $cliente]);//
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('clients.index')->with('info', 'Cliente editado correctamente');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clients.index')->with('info', 'Cliente eliminado exitosamente');
    }
}
