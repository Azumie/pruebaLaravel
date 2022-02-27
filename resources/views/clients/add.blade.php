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
                    <form method='POST' action='{{ route('clients.add') }}' class='form-group'>
                        @csrf
                        <input name='nombre' class='form-control' type='text' placeholder='Nombre'/>
                        <input name='codigo' class='form-control' type='text' placeholder='Codigo'/>
                        <input name='rif' class='form-control' type='text' placeholder='RIF'/>
                        <input name='direccion' class='form-control' type='text' placeholder='Direccion'/>
                        <input name='telefono' class='form-control' type='text' placeholder='Telefono'/>
                        <input name='email' class='form-control' type='text' placeholder='Email'/>
                        <button class='btn btn-info'>Guardar</button>
                        <a class='btn btn-danger' href='{{ route('clients.index') }}'>Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
