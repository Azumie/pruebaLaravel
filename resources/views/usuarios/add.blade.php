@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Agregar Cliente
                    </h3>
                </div>
                <div class="card-body">
                    @if ($errors->has('nombre'))
                    <div class='alert alert-danger'>
                        {{ $errors->first('nombre') }}
                    </div>
                    @endif
                    <form method='POST' action='{{ route('usuarios.add') }}' class='form-group'>
                        @csrf
                        <input name='name' class='form-control' type='text' placeholder='Nombre'/>
                        <input name='email' class='form-control' type='text' placeholder='Email'/>
                        <input name='password' class='form-control' type='password' placeholder='Clave'/>
                        <select name='idsucursal' class='form-control'>
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
