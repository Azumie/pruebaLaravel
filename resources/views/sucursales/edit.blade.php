@extends('layouts.custom')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Editar Sucursal
                    </h3>
                </div>
                <div class="card-body">
                    @if ($errors->has('codigo'))
                    <div class='alert alert-danger'>
                        {{ $errors->first('codigo') }}
                    </div>
                    @endif
                    <form method='POST' action='{{ route('sucursales.update', $sucursal->id) }}' class='form-group'>
                        @method('put')
                        @csrf
                        <input name='codigo' value='{{ $sucursal->codigo }}' class='form-control' type='text' placeholder='Codigo'/>
                        <input name='descripcion' value='{{ $sucursal->descripcion }}' class='form-control' type='text' placeholder='Descripcion'/>
                        <input name='rif' value='{{ $sucursal->rif }}' class='form-control' type='text' placeholder='RIF'/>
                        <input name='direccion' value='{{ $sucursal->direccion }}' class='form-control' type='text' placeholder='Direccion'/>
                        <input name='correo' value='{{ $sucursal->correo }}' class='form-control' type='text' placeholder='Correo'/>
                        <input name='telefono' value='{{ $sucursal->telefono }}' class='form-control' type='text' placeholder='Telefono'/>
                        <button class='btn btn-info'>Guardar</button>
                        <a class='btn btn-danger' href='{{ route('sucursales.index') }}'>Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
