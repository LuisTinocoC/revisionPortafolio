@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')
    <h1 class="text-center mb-4">Lista de Profesores</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="box shadow-lg">
            <div class="box_header mb-3">
                <a href="{{ route('professors.create') }}" class="btn btn-success btn-lg">
                    <i class="fas fa-plus"></i> Nuevo Profesor
                </a>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover table-striped w-100">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($professors as $professor)
                        <tr>
                            <td class="text-center">{{ $professor->id }}</td>
                            <td class="text-center">{{ $professor->name }}</td>
                            <td class="text-center">{{ $professor->email }}</td>
                            <td class="text-center">
                                <span class="badge {{ $professor->enabled ? 'badge-success' : 'badge-danger' }}">
                                    {{ $professor->enabled ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('professors.show', $professor->id) }}" class="btn btn-info" title="Ver">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-warning" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
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
@stop
