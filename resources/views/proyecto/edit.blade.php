@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Modificar proyecto</h2>
        <div class="lead">
            Editar.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('proyecto.update', $proyecto->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nombre</label>
                    <input value="{{ $proyecto->title }}" 
                        type="text" 
                        class="form-control" 
                        name="nombreProyecto" 
                        placeholder="Inserte nombre de proyecto" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('nombreProyecto') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input value="{{ $proyecto->descripcion }}" 
                        type="text" 
                        class="form-control" 
                        name="descripcion" 
                        placeholder="Descripcion" required>

                    @if ($errors->has('descripcion'))
                        <span class="text-danger text-left">{{ $errors->first('descripcion') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="estadoProyecto" class="form-label">Estado</label>
                    <select class="form-control" 
                        name="estadoProyecto" required>
                        <option value="">Seleccionar estado</option>
                                <option value="Inicio"  @if ($proyecto->estadoProyecto==="Inicio") selected @endif
                                >Inicio</option>
                                <option value="En curso" @if ($proyecto->estadoProyecto==="En curso") selected @endif
                                >En curso</option>
                                <option value="Revision" @if ($proyecto->estadoProyecto==="Revision") selected @endif
                                >Revision</option>
                                <option value="Aprobado" @if ($proyecto->estadoProyecto==="Aprobado") selected @endif
                                >Aprobado</option>
                                <option value="Finalizado" @if ($proyecto->estadoProyecto==="Finalizado") selected @endif
                                >Finalizado</option>
                    </select>                    
                    @if ($errors->has('body'))
                        <span class="text-danger text-left">{{ $errors->first('body') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                    <input class="form-control" 
                        type="date"
                        name="fechaInicio" 
                        value="{{$proyecto->fechaInicio}}"
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
                        value="{{ $proyecto->fechaFin}}"
                        placeholder="Fecha estimada de finalización" required>{{ old('fechaFin') }}
                    @if ($errors->has('fechaFin'))
                        <span class="text-danger text-left">{{ $errors->first('fechaFin') }}</span>
                    @endif
                </div>
                

                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <a href="{{ route('proyecto.index') }}" class="btn btn-default">Volver</a>
            </form>
        </div>

    </div>
@endsection