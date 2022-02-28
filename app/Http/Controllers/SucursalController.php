<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\SucursalRequest;
use Illuminate\Support\Facades\DB;
use \App\Models\Sucursal;

class SucursalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sucursales = DB::table('sucursals')->where('activo', 1)->get();
        return view('sucursales.index', ['sucursales' => $sucursales]);
        //return $sucursales;
    }

    public function create()
    {
        return view('sucursales.add');
    }

    public function store(SucursalRequest $request)
    {
        $sucursal = new Sucursal;
        $sucursal->create($request->all());

        return redirect()->route('sucursales.index')->with('info', 'Sucursal agregado correctamente');

    }

    public function edit($id)
    {
       $sucursal = Sucursal::findOrFail($id);
       return view('sucursales.edit', ['sucursal' => $sucursal]);
    }

    public function update(SucursalRequest $request, $id)
    {
        $sucursal= Sucursal::findOrFail($id);
        $sucursal->update($request->all());
        return redirect()->route('sucursales.index')->with('info', 'Sucursal editada correctamente');
    }

    public function destroy($id)
    {
        $sucursal= Sucursal::findOrFail($id);
        $sucursal->activo = false;
        $sucursal->save();
        return redirect()->route('sucursales.index')->with('info', 'Sucursal editada correctamente');
    }
}
