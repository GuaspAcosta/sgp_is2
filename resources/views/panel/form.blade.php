@extends('layouts.panel')

@section('content')
  <div class="content">
      <div class="row">
        <div class="col-md-12">
          <form id="RegisterValidation" action="#" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            
              <div class="card">
                  <div class="card-header ">
                      <h4 class="card-title">Proyecto 1</h4>
                  </div>
                  <div class="card-body ">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="row">
                                  <div class="form-group has-label col-12">
                                      <label for="titulo">Título <span class="text-danger">*</span></label>
                                      <input class="form-control" id="titulo" name="titulo" type="text" value="Proyecto 1" />
                                  </div>
                                  <div class="form-group has-label col-12">
                                    <label for="fecha_inicio">
                                        Fecha de inicio
                                    </label>
                                    <input type="text" name="fecha_inicio" id="fecha_inicio"
                                            class="form-control datepicker"
                                            value="{{ date('d/m/Y')}}">
                                </div>
                                  <div class="form-group has-label col-12">
                                      <label for="descripcion">Descripción</label>
                                      <textarea class="form-control" id="descripcion" name="descripcion">Es un proyecto</textarea>
                                  </div>
                                  <div class="form-group has-label col-12">
                                    <label for="visible" class="mb-2 d-block">
                                      Activo
                                    </label>
                                    <input class="bootstrap-switch" type="checkbox" data-toggle="switch" id="visible" name="visible" checked data-on-label="<i class='nc-icon nc-check-2'></i>" data-off-label="<i class='nc-icon nc-simple-remove'></i>" data-on-color="success" data-off-color="success" />
                                  </div>
                                  
                              </div>
                              <div class="category form-category"><span class="text-danger">* Campos requeridos</span></div>
                          </div>
                      </div>
                    
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header ">
                    <h4 class="card-title">Gastos del Proyecto 1</h4>
                    <button type="submit" class="btn btn-primary">Agregar Gasto</button>
                </div>
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-12">
                      <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Gastos en la fecha</th>
                            <th>Total</th>
                            <th class="disabled-sorting text-right">Acciones</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Gastos en la fecha</th>
                            <th>Total</th>
                            <th class="disabled-sorting text-right">Acciones</th>
                          </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                              
                              <td>12/10/2021</td>
                              <td>600.000 Gs</td>
                              <td class="text-right">
                                <a href="{{route('proyectos.edit', 1)}}" class="btn btn-warning btn-link btn-icon btn-sm edit "><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove btn-delete" data-id="" data-toggle="modal"  data-target="#modal-default" data-route="#" data-title="Proyecto 1"><i class="fa fa-times"></i></a>
      
                              </td>
                            </tr>
      
      
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                </div>
            </form>
          </div>
        </div>
      </div>
@endsection

@section('especifico')
    <script src="{{ url('assets_template/js/plugins/jasny-bootstrap.min.js') }}"></script>
  <script>
    
    

  </script>

@endsection



