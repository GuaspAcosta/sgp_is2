<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets-front/images/favicon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('assets-front/images/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>{{ config('app.name', 'Panel Alemania Cell') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ url('assets_template/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets_template/css/paper-dashboard.css') }}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ url('assets_template/demo/demo.css') }}" rel="stylesheet"/>
    <style media="screen">
        .wrapper.wrapper-full-page {
            min-height: 100vh;
            height: auto;
        }
    </style>
</head>

<body class="login-page">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Constructora Salta</a>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper wrapper-full-page ">
    <div class="full-page section-image" filter-color="black" data-image="{{ url('assets_template/img/salta_background.jpg') }}">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->

        <div class="content">
            <div class="container">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login">
                            <div class="card-header ">
                                <div class="card-header ">
                                    <h3 class="header text-center">Ingresar</h3>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input id="email" placeholder="Nombre..." type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-key-25"></i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br/>

                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-warning btn-round btn-block mb-3" style="background: #ce7c1c!important">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
<!--   Core JS Files   -->
<script src="{{ url('assets_template/js/core/jquery.min.js') }}"></script>
<script src="{{ url('assets_template/js/core/popper.min.js') }}"></script>
<script src="{{ url('assets_template/js/core/bootstrap.min.js') }}"></script>
<script src="{{ url('assets_template/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ url('assets_template/js/plugins/moment.min.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('assets_template/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('assets_template/demo/demo.js') }}"></script>
<script>
    $(document).ready(function () {
        demo.checkFullPageBackgroundImage();
    });
</script>
</body>

</html>


