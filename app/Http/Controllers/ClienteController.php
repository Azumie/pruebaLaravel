<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clients.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCliente = new Cliente;
        $newCliente->nombre = $request->input('nombre');
        $newCliente->codigo = $request->input('codigo');
        $newCliente->rif = $request->input('rif');
        $newCliente->direccion = $request->input('direccion');
        $newCliente->telefono = $request->input('telefono');
        $newCliente->email = $request->input('email');
        $newCliente->save();
        return redirect()->route('clients.index')->with('info', 'Cliente Agregado correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clients.edit', ['client' => $cliente]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->rif = $request->input('rif');
        $cliente->telefono = $request->input('telefono');
        $cliente->email = $request->input('email');
        $cliente->direccion = $request->input('direccion');
        $cliente->codigo = $request->input('codigo');
        $cliente->save();
        return redirect()->route('clients.index')->with('info', 'Cliente editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clients.index')->with('info', 'Cliente eliminado exitosamente');
    }
}
