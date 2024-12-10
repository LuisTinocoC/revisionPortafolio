@extends('adminlte::page')

@section('title', 'Editar Profesor')

@section('content_header')
    <h1 class="text-center mb-4">Editar Profesor</h1>
@stop

@section('content')
<div class="container">
    <h1>Editar Profesor</h1>

    <form action="{{ route('professors.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $professor->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $professor->email) }}" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña (dejar en blanco si no se quiere cambiar)</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="enabled">Estado</label>
            <select name="enabled" id="enabled" class="form-control">
                <option value="1" {{ old('enabled', $professor->enabled) == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('enabled', $professor->enabled) == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="reviewer_id">Revisor asignado</label>
            <select name="reviewer_id" id="reviewer_id" class="form-control">
                <option value="">Seleccione un revisor</option>
                @foreach($reviewers as $reviewer)
                    <option value="{{ $reviewer->id }}" 
                        {{ old('reviewer_id', $professor->reviewer_id) == $reviewer->id ? 'selected' : '' }}>
                        {{ $reviewer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@stop