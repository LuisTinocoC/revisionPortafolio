@extends('adminlte::page')

@section('title', 'Detalles del Revisor')

@section('content_header')
    <h1 class="text-center mb-4">Detalles del Revisor</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <p class="form-control-plaintext">{{ $reviewer->name }}</p>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <p class="form-control-plaintext">{{ $reviewer->email }}</p>
                </div>
                <div class="form-group">
                    <label for="enabled">Estado:</label>
                    <p class="form-control-plaintext">
                        <span class="badge {{ $reviewer->enabled ? 'badge-success' : 'badge-danger' }}">
                            {{ $reviewer->enabled ? 'Habilitado' : 'Deshabilitado' }}
                        </span>
                    </p>
                </div>
                <a href="{{ route('reviewers.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@stop
