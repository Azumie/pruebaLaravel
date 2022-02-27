@extends('layouts.app')

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
                    Clientes
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
