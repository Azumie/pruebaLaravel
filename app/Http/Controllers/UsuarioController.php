<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = DB::table('users')->where('activo', 1)->get();
        return view('usuarios.index', ['usuarios' => $usuarios]);

    }

    public function create()
    {
        $sucursales = DB::table('sucursals')->where('activo', 1)->get();
        return view('usuarios.add', ['sucursales' => $sucursales]);
    }

    public function store(Request $request)
    {
        $usuario = new User;
        $datos = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'idsucursal' => $request->idsucursal
        ];
        $usuario->create($datos);

        return redirect()->route('usuarios.index')->with('info', 'Usuario Agregado correctamente');

    }

    public function edit($id)
    {
        $sucursales = DB::table('sucursals')->where('activo', 1)->get();
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', [
            'usuario' => $usuario,
            'sucursales' => $sucursales
        ]);//
    }

    public function update(Request $request, $id)
    {
        $usuario = user::findOrFail($id);
        if ($request->password != null)
            $usuario->password = Hash::make($request->password);
        if ($usuario->name !== 'admin')
            $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->idsucursal = $request->idsucursal;
        $usuario->save();
        return redirect()->route('usuarios.index')->with('info', 'Usuario editado correctamente');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        if ($usuario->name === 'admin')
            return redirect()->route('usuarios.index')->with('info', 'Usuario admin no puede ser eliminado');
        $usuario->activo = false;
        $usuario->save();
        return redirect()->route('usuarios.index')->with('info', 'Usuario eliminado correctamente');

    }
}
