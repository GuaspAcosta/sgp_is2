<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets_template/img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{ url('assets_template/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Administrador</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('assets_template/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets_template/css/paper-dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets_template/demo/demo.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('assets_template/select2/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="gray" data-active-color="warning">
        <div class="logo">
            <a href="{{route('panel.index')}}" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="{{url('assets_template/img/favicon.png') }}">
                </div>
            </a>
            <a href="{{route('panel.index')}}" class="simple-text logo-normal">
                sgp_is2
            <!-- <div class="logo-image-big">
            <img src="{{ url('assets_template/img/logo-big.png') }}">
          </div> -->
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{ asset('assets_template/img/default-avatar.png') }}"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>
                            Usuario
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="{{ (Request::is('panel/editar_perfil') || Request::is('panel/opciones'))?'collapse show':'collapse'}} " id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <span class="sidebar-mini-icon">CS</span>
                                    <span class="sidebar-normal">Cerrar Sesión</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('sidebar')

        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
    @include('header')
        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Eliminar banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Esta acción es irreversible, está seguro que desea continuar?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cancelar</button>
                        <form class="" action="" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger" name="button">Sí, eliminar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © {{ date('Y') }}
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<form id="logout-form" action="#" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<!--   Core JS Files   -->
<script src="{{ url('assets_template/js/core/jquery.min.js') }}"></script>
<script src="{{ url('assets_template/select2/select2.min.js') }}"></script>
<script src="{{ url('assets_template/js/core/popper.min.js') }}"></script>
<script src="{{ url('assets_template/js/core/bootstrap.min.js') }}"></script>
<script src="{{ url('assets_template/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ url('assets_template/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ url('assets_template/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ url('assets_template/js/plugins/sweetalert2.min.js') }}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ url('assets_template/js/plugins/jquery.validate.min.js') }}"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ url('assets_template/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ url('assets_template/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ url('assets_template/js/plugins/bootstrap-datetimepicker.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{ url('assets_template/js/plugins/jquery.dataTables.min.js')}}?v=1.0"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ url('assets_template/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ url('assets_template/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ url('assets_template/js/plugins/jquery-jvectormap.js') }}"></script>
<!--  Plugin for the Bootstrap Table -->
<script src="{{ url('assets_template/js/plugins/nouislider.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{ url('assets_template/js/plugins/chartjs.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('assets_template/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('assets_template/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript') }}"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('assets_template/demo/demo.js') }}"></script>
<script>
    $(document).on('click', '.btn-delete', function(){
        $('.modal form').attr('action', $(this).data('route'));
        $('#ModalLabel').text('Eliminar: '+$(this).data('title'));
    })
    @if($errors->any())
        @foreach ($errors->all() as $error)
            $.notify({
                // options
                message: '{{$error}}'
            },{
                // settings
                type: 'danger'
            });
        @endforeach
    @endif
    @if(session()->has('mensaje'))
        $.notify({
            // options
            message: '{{ session()->get('mensaje') }}'
        },{
            // settings
            type: 'success'
        });

    @endif
    @if(session()->has('errores'))
    $.notify({
        // options
        message: '{{ session()->get('errores') }}'
    },{
        // settings
        type: 'danger'
    });

    @endif
    $.extend($.validator.messages, {
        required: "Este campo es obligatorio.",
        remote: "Por favor, completá este campo.",
        email: "Por favor, escribí una dirección de correo válida.",
        url: "Por favor, escribí una URL válida.",
        date: "Por favor, escribí una fecha válida.",
        dateISO: "Por favor, escribí una fecha (ISO) válida.",
        number: "Por favor, escribí un número entero válido.",
        digits: "Por favor, escribí sólo dígitos.",
        creditcard: "Por favor, escribí un número de tarjeta válido.",
        equalTo: "Por favor, escribí el mismo valor de nuevo.",
        extension: "Por favor, escribí un valor con una extensión aceptada.",
        maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
        minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
        rangelength: $.validator.format("Por favor, escribí un valor entre {0} y {1} caracteres."),
        range: $.validator.format("Por favor, escribí un valor entre {0} y {1}."),
        max: $.validator.format("Por favor, escribí un valor menor o igual a {0}."),
        min: $.validator.format("Por favor, escribí un valor mayor o igual a {0}."),
        nifES: "Por favor, escribí un NIF válido.",
        nieES: "Por favor, escribí un NIE válido.",
        cifES: "Por favor, escribí un CIF válido."
    });
</script>
@yield('especifico')
</body>

</html>



