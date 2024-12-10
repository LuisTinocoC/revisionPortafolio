@extends('adminlte::page')

@section('title', 'Editar Revisor')

@section('content_header')
    <h1 class="text-center mb-4">Editar Revisor</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="{{ route('reviewers.update', $reviewer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $reviewer->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $reviewer->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="enabled">Estado</label>
                        <select class="form-control" id="enabled" name="enabled" required>
                            <option value="1" {{ $reviewer->enabled ? 'selected' : '' }}>Habilitado</option>
                            <option value="0" {{ !$reviewer->enabled ? 'selected' : '' }}>Deshabilitado</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
