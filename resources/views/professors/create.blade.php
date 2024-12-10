@extends('adminlte::page')

@section('title', 'Crear Profesor')

@section('content_header')
    <h1 class="text-center mb-4">Registrar Profesor</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="{{ route('professors.store') }}" method="POST">
                    @csrf

                    <!-- Nombre -->
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del profesor" value="{{ old('name') }}" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Correo del profesor" value="{{ old('email') }}" required>
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                    </div>

                    <!-- Relación con Revisor -->
                    <div class="form-group">
                        <label for="reviewer_id">Revisor:</label>
                        <select name="reviewer_id" id="reviewer_id" class="form-control" required>
                            <option value="">Seleccione un revisor</option>
                            @foreach ($reviewers as $reviewer)
                                <option value="{{ $reviewer->id }}">{{ $reviewer->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Habilitado -->
                    <div class="form-group">
                        <label for="enabled">Estado</label>
                        <select name="enabled" id="enabled" class="form-control">
                            <option value="1" {{ old('enabled') == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ old('enabled') == 0 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Registrar</button>
                        <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <style>
        .card {
            border-radius: 10px;
            border: 1px solid #ddd;
        }
    </style>
@stop

@section('js')
    <script> console.log("Vista de creación de profesor lista."); </script>
@stop
