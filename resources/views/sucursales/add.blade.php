@extends('layouts.custom')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Agregar Sucursal
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
                    <form method='POST' action='{{ route('sucursales.add') }}' class='form-group'>
                        @csrf
                        <input name='codigo' class='form-control' type='text' placeholder='Codigo'/>
                        <input name='descripcion' class='form-control' type='text' placeholder='Descripcion'/>
                        <input name='rif' class='form-control' type='text' placeholder='RIF'/>
                        <input name='direccion' class='form-control' type='text' placeholder='Direccion'/>
                        <input name='correo' class='form-control' type='text' placeholder='Correo'/>
                        <input name='telefono' class='form-control' type='text' placeholder='Telefono'/>
                        <button class='btn btn-info'>Guardar</button>
                        <a class='btn btn-danger' href='{{ route('sucursales.index') }}'>Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
