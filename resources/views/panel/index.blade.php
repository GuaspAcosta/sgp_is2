@extends('layouts.panel')

@section('content')
    <div class="content">

        <div class="row">

            <div class="col-md-6 offset-md-3">
                <div class="card card-user">
                    <div class="image">
                         <img src="{{ asset('assets_template/img/salta_background.jpg')}}" alt="aux_img">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#" style="text-decoration: none;">
                                <img class="avatar border-gray" src="{{ asset('assets_template/img/default-avatar.png') }}" alt="aux_img">
                                <h5 class="title">Usuario</h5>
                            </a>
                            <p class="description">
                                salta@gmail.com
                            </p>
                        </div>

                    </div>
                    <div class="card-footer">
                        <hr>
                        
                    </div>
                </div>

            </div>

        </div>


    </div>
@endsection
@section('especifico')
    <script>
        
    </script>
@endsection



