@extends('layouts.custom')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Clientes
                    <a class="btn btn-success float-end" href='{{ route('clients.add') }}'>Nuevo Cliente</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if (session('info'))
                        <div class='alert alert-success'>{{ session('info') }}</div>
                    @endif
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Codigo</th>
                                <th>Rif</th>
                                <th>Telefono</th>
                                <th>email</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->codigo }}</td>
                                <td>{{ $cliente->rif }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>
                                    <a
                                        href='{{ route('clients.edit', $cliente->id) }}'
                                        class='btn btn-info btn-sm'>
                                        Editar
                                    </a>
                                    <a
                                        href='javascript: document.getElementById("delete-cliente-{{ $cliente->id }}").submit()'
                                        class='btn btn-danger btn-sm'>
                                        Eliminar
                                    </a>
                                    <form
                                        id='delete-cliente-{{ $cliente->id }}'
                                        action='{{ route('clients.destroy', $cliente->id) }}'
                                        method='POST'>
                                        @method('delete')
                                        @csrf
                                    </form>
                                    {{--<form--}}
                                        {{--id='edit-client-{{ $cliente->id }}'--}}
                                        {{--action='{{ route('clients.edit', $cliente->id) }}'--}}
                                        {{--method='POST'>--}}
                                        {{--@method('put')--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
