@extends('adminlte::page')

@section('title', 'Crear Revisor')

@section('content_header')
    <h1 class="text-center mb-4">Crear Nuevo Revisor</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="{{ route('reviewers.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del revisor" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo del revisor" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese una contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="enabled">Estado</label>
                        <select class="form-control" id="enabled" name="enabled" required>
                            <option value="1">Habilitado</option>
                            <option value="0">Deshabilitado</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
