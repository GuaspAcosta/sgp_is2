@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Agregar nuevo proyecto</h2>
        <div class="lead">
            Agregar nuevo proyecto.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('proyecto.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="nombreProyecto" class="form-label">Nombre de proyecto</label>
                    <input value="{{ old('nombreProyecto') }}" 
                        type="text" 
                        class="form-control" 
                        name="nombreProyecto" 
                        placeholder="escribir nombre proyecto" required>

                    @if ($errors->has('nombreProyecto'))
                        <span class="text-danger text-left">{{ $errors->first('nombreProyecto') }}</span>
                    @endif
                </div>                
                <div class="mb-3">
                    <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                    <input class="form-control" 
                        type="date"
                        name="fechaInicio" 
                        placeholder="fechaInicio" required>{{ old('fechaInicio') }}
                    @if ($errors->has('fechaInicio'))
                        <span class="text-danger text-left">{{ $errors->first('fechaInicio') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="fechaFin" class="form-label">Fecha Fin Estimada</label>
                    <input class="form-control" 
                        type="date"
                        name="fechaFin" 
                        placeholder="Fecha estimada de finalización" required>{{ old('fechaFin') }}
                    @if ($errors->has('fechaFin'))
                        <span class="text-danger text-left">{{ $errors->first('fechaFin') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="estadoProyecto" class="form-label">Estado del Proyecto</label>
                    <select class="form-control" 
                        name="estadoProyecto" required>
                        <option value="">Seleccionar estado</option>
                                <option value="Inicio"
                                >Inicio</option>
                                <option value="En curso"
                                >En curso</option>
                                <option value="Revision"
                                >Revision</option>
                                <option value="Aprobado"
                                >Aprobado</option>
                                <option value="Finalizado"
                                >Finalizado</option>
                    </select>
                    @if ($errors->has('estadoProyecto'))
                        <span class="text-danger text-left">{{ $errors->first('estadoProyecto') }}</span>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control"  
                        name="descripcion" 
                        placeholder="Descripcion" required>{{ old('descripcion') }}
                    </textarea>
                    @if ($errors->has('descripcion'))
                        <span class="text-danger text-left">{{ $errors->first('descripcion') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">User</label>
                    <select class="form-control" 
                        name="users[]" required id="usersMultiple" multiple="multiple">
                        <option value="">Agregar Usuarios a proyecto</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}"
                                >{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('user'))
                        <span class="text-danger text-left">{{ $errors->first('user') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Guardar proyecto</button>
                <a href="{{ route('proyecto.index') }}" class="btn btn-default">Volver</a>
            </form>
        </div>

    </div>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
    $('#usersMultiple').select2();
});
</script>
@endsection