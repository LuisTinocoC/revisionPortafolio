@extends('adminlte::page')

@section('title', 'Revisores')

@section('content_header')
    <h1 class="text-center mb-4">Relación de Revisores</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12"> <!-- Ocupa todo el ancho -->
        <div class="box shadow-lg">
            <div class="box_header mb-3">
                <!-- Botón para agregar nuevo revisor -->
                <a href="{{ route('reviewers.create') }}" class="btn btn-success btn-lg">
                    <span class="glyphicon glyphicon-plus">+</span> Nuevo Revisor
                </a>
            </div>
            @include('partials.info') <!-- Mensajes informativos -->
            <div class="box-body p-4">
                <table id="example1" class="table table-bordered table-hover table-striped w-100">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviewers as $reviewer)
                        <tr>
                            <!-- Mostrar nombre -->
                            <td class="text-center">{{ $reviewer->name }}</td>
                            <!-- Mostrar email -->
                            <td class="text-center">{{ $reviewer->email }}</td>
                            <!-- Mostrar estado -->
                            <td class="text-center">
                                <span class="badge {{ $reviewer->enabled ? 'badge-success' : 'badge-danger' }}">
                                    {{ $reviewer->enabled ? 'Habilitado' : 'Deshabilitado' }}
                                </span>
                            </td>
                            <!-- Mostrar operaciones -->
                            <td class="text-center">
                                <a href="{{ route('reviewers.show', $reviewer->id) }}" class="btn btn-info" title="Ver">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('reviewers.edit', $reviewer->id) }}" class="btn btn-warning" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger" title="Eliminar" data-toggle="modal" data-target="#modal-delete-{{ $reviewer->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal para confirmación de eliminación -->
                        @include('reviewers.delete', ['reviewer' => $reviewer])
                        @endforeach
                    </tbody>
                    <tfoot class="bg-light">
                        <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <style>
        .box {
            border-radius: 10px;
            border: 1px solid #ddd;
            width: 100%;
        }
        .badge-success {
            background-color: #28a745;
        }
        .badge-danger {
            background-color: #dc3545;
        }
        thead.bg-primary th {
            background-color: #007bff !important;
        }
        tfoot.bg-light th {
            background-color: #f8f9fa !important;
        }
    </style>
@stop

@section('js')
    <script>
        console.log("Estilo personalizado aplicado a la tabla de Revisores.");
    </script>
@stop
