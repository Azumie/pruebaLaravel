@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Sucursales
                    <a class="btn btn-success float-end" href='{{ route('sucursales.add') }}'>Nueva sucursal</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if (session('info'))
                        <div class='alert alert-success'>{{ session('info') }}</div>
                    @endif
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Rif</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($sucursales as $sucursal)
                            <tr>
                                <td>{{ $sucursal->codigo }}</td>
                                <td>{{ $sucursal->descripcion}}</td>
                                <td>{{ $sucursal->rif }}</td>
                                <td>{{ $sucursal->telefono }}</td>
                                <td>{{ $sucursal->correo }}</td>
                                <td>
                                    <a
                                        href='{{ route('sucursales.edit', $sucursal->id) }}'
                                        class='btn btn-info btn-sm'>
                                        Editar
                                    </a>
                                    <a
                                        href='javascript: document.getElementById("delete-sucursal-{{ $sucursal->id }}").submit()'
                                        class='btn btn-danger btn-sm'>
                                        Eliminar
                                    </a>
                                    <form
                                        id='delete-sucursal-{{ $sucursal->id }}'
                                        action='{{ route('sucursales.destroy', $sucursal->id) }}'
                                        method='POST'>
                                        @method('delete')
                                        @csrf
                                    </form>
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
