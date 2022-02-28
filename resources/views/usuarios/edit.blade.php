@extends('layouts.custom')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Editar Usuario
                    </h3>
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                    <div class='alert alert-danger'>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method='POST' action='{{ route('usuarios.update', $usuario->id) }}' class='form-group'>
                        @method('put')
                        @csrf
                        <input name='name' value='{{ $usuario->name }}' class='form-control' type='text' placeholder='Nombre'/>
                        <input name='email' value='{{ $usuario->email }}' class='form-control' type='text' placeholder='Email'/>
                        <input name='password' class='form-control' type='password' placeholder='Nueva Clave'/>
                        <select name='idsucursal' value='{{ $usuario->idsucursal }}' class='form-control'>
                            @foreach ($sucursales as $sucursal)
                                <option value='{{ $sucursal->id }}'>{{ $sucursal->codigo }}</option>
                            @endforeach
                        </select>
                        <button class='btn btn-info'>Guardar</button>
                        <a class='btn btn-danger' href='{{ route('usuarios.index') }}'>Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
