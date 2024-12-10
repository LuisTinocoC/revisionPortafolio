@extends('adminlte::page')

@section('title', 'Detalle del Profesor')

@section('content_header')
    <h1 class="text-center mb-4">Detalle del Profesor</h1>
@stop

@section('content')
<div class="container">
    <h1>Detalles del Profesor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $professor->name }}</h5>
            <p class="card-text">Correo: {{ $professor->email }}</p>
            <p class="card-text">Estado: {{ $professor->enabled ? 'Activo' : 'Inactivo' }}</p>
            <p class="card-text">Revisor asignado: 
                {{ $professor->reviewer ? $professor->reviewer->name : 'No asignado' }}
            </p>
            <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('professors.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@stop
