@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Mostrar Proyecto</h2>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div>
                Nombre: {{ $proyecto->nombreProyecto }}
            </div>
            <div>
                Descripcion: {{ $proyecto->descripcion }}
            </div>
            <div>
                Estado: {{ $proyecto->estadoProyecto }}
            </div>
            <div>
                Inicio: {{ date('d/m/Y', strtotime($proyecto->fechaInicio)) }}
            </div>
            <div>
                Finalizacion: {{ date('d/m/Y', strtotime($proyecto->fechaFin)) }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('proyecto.edit', $proyecto->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ route('proyecto.index') }}" class="btn btn-default">Volver</a>
    </div>
@endsection