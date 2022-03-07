@extends('layouts.panel')

@section('content')
  <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Proyectos</h4>
              </div>
              <div class="card-body">
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Fecha de inicio</th>
                      <th>Fecha fin aproximada</th>
                      <th>Descripción</th>
                      <th>Activo</th>
                      <th class="disabled-sorting text-right">Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Título</th>
                      <th>Fecha de inicio</th>
                      <th>Fecha fin aproximada</th>
                      <th>Descripción</th>
                      <th>Activo</th>
                      <th class="disabled-sorting text-right">Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                        <td>Proyecto 1</td>
                        <td>12/10/2021</td>
                        <td>12/08/2022</td>
                        <td>Es el proyecto para construir un puente</td>
                        <td><span class="text-success">ACTIVO</span></td>
                        <td class="text-right">
                          <a href="{{route('proyectos.edit', 1)}}" class="btn btn-warning btn-link btn-icon btn-sm edit "><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove btn-delete" data-id="" data-toggle="modal"  data-target="#modal-default" data-route="#" data-title="Proyecto 1"><i class="fa fa-times"></i></a>

                        </td>
                      </tr>


                  </tbody>
                </table>
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
        </div>
        <!-- end row -->
      </div>
@endsection


@section('especifico')




  <script>
    $(document).ready(function() {
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "Todos"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Buscar registros",
        }

      });

      var table = $('#datatable').DataTable();
    });

  </script>
@endsection




