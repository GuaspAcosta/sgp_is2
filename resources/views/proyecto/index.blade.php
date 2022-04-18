@extends('layouts.app-master')

@section('content')
    
    <h1 class="mb-3">Creación de Proyectos</h1>

    <div class="bg-light p-4 rounded">
        <h2>Proyectos</h2>
        <div class="lead">
            Administre sus proyectos aquí.
            <a href="{{ route('proyecto.create') }}" class="btn btn-primary btn-sm float-right">Agregar proyecto</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">Id Proyecto</th>
             <th>Nombre</th>
             <th>Estado</th>
             <th>Fecha Inicio</th>
             <th>Fecha Fin</th>
             <th width="3%" colspan="3">Funciones</th>
            </tr>
            @foreach ($proyectos as $key => $proyecto)
            <tr>
                <td>{{ $proyecto->id }}</td>
                <td>{{ $proyecto->nombreProyecto }}</td>
                <td>{{ $proyecto->estadoProyecto }}</td>
                <td>{{ date('d/m/Y', strtotime($proyecto->fechaInicio)) }}</td>
                <td>{{ date('d/m/Y', strtotime($proyecto->fechaFin)) }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('proyecto.show', $proyecto->id) }}">Mostrar</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('proyecto.edit', $proyecto->id) }}">Editar</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['proyecto.destroy', $proyecto->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $proyectos->links() !!}
        </div>

    </div>
@endsection