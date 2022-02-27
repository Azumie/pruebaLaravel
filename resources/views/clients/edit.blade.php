@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Editar Cliente
                    </h3>
                </div>
                <div class="card-body">
                    <form method='POST' action='{{ route('clients.update', $client->id) }}' class='form-group'>
                        @method('put')
                        @csrf
                        <input name='nombre' value='{{ $client->nombre }}' class='form-control' type='text' placeholder='Nombre'/>
                        <input name='codigo' value='{{ $client->codigo }}' class='form-control' type='text' placeholder='Codigo'/>
                        <input name='rif' value='{{ $client->rif }}' class='form-control' type='text' placeholder='RIF'/>
                        <input name='direccion' value='{{ $client->direccion }}' class='form-control' type='text' placeholder='Direccion'/>
                        <input name='telefono' value='{{ $client->telefono }}' class='form-control' type='text' placeholder='Telefono'/>
                        <input name='email' value='{{ $client->email }}' class='form-control' type='text' placeholder='Email'/>
                        <button class='btn btn-info'>Guardar</button>
                        <a class='btn btn-danger' href='{{ route('clients.index') }}'>Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
