@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="imagenes" style="text-align:center;">
                    <img src="/images/logoudenar.jpg" style="width:300px;" class="logoudenar"><br>
                    <img src="/images/huella.png" style="width:300px;" class="logohuella">
                </div>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam euismod magna, eu dignissim mi pulvinar et.</h3><br>
                <div style="text-align:center;">
                    <div >
                        <div class="info" >
                            <img src="/images/question.png" style="width:40px;" class="pregunta">
                            <button class="btn_quest">¿Qué es la Huella de Carbono?</button>
                        </div>
                        <div class="info">
                            <img src="/images/leaf.png" style="width:40px;" class="hoja">
                            <button class="btn_calc">Calcula tu Huella de Carbono</button>
                        </div>
                        <div class="info">
                            <img src="/images/information.png" style="width:40px;" class="informacion">
                            <button class="btn_info">Podría interesarte...</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
