@extends('layouts.custom')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Usuarios
                    <a class="btn btn-success float-end" href='{{ route('usuarios.add') }}'>Nuevo Usuario</a>
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
                                <th>email</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <a
                                        href='{{ route('usuarios.edit', $usuario->id) }}'
                                        class='btn btn-info btn-sm'>
                                        Editar
                                    </a>
                                    <a
                                        href='javascript: document.getElementById("delete-usuario-{{ $usuario->id }}").submit()'
                                        class='btn btn-danger btn-sm'>
                                        Eliminar
                                    </a>
                                    <form
                                        id='delete-usuario-{{ $usuario->id }}'
                                        action='{{ route('usuarios.destroy', $usuario->id) }}'
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
