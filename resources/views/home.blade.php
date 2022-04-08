@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="border-style:solid;border-color: #d9d9d9;border-radius: 10px;background-color:white;">    
        <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                
                
                @foreach ($noticias as $noticia)
                <div class="carousel-item @if($noticia->id_noticia == 10) active @endif" style=" width:100%; max-height: 500px;margin-top:10px;">
                    <img src="{{$noticia->imagen}}" class="d-block w-100" alt="{{$noticia->id_noticia}}" style ="float: left;width: 500px;height: 500px;object-fit: cover;border-radius:10px;">
                        <div class="carousel-caption d-none d-md-block"> 
                            <h5>{{$noticia->encabezado}}</h5>
                            <p>{{$noticia->resumen}}</p>
                        </div>
                </div>
                @endforeach
               
                <!-- <div class="carousel-item active">
                <img src="/images/fondonegro.jpg" class="d-block w-100" alt="1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/images/fondonegro.jpg" class="d-block w-100" alt="2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/images/fondonegro.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div> -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h3>En este aplicativo podrás medir tu Huella de Carbono, calculando la cantidad de gases de efecto invernadero generados por tus actividades cotidianas. Buscamos con este aplicativo, la consientización en las personas de que sus actividades cotidianas pueden estar afectando directamente al medio ambiente y así, poder reducir poco a poco su impacto negativo.</h3><br>
        <div style="text-align:center;">
            <div >
                <div class="info" >
                    <button class="learn-more" onclick="location='/info'">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">¿Qué es la Huella de Carbono?</span>
                    </button>
                </div>
                <div class="info">
                    <button class="learn-more" onclick="location='/formulario'">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Calcula tu Huella de Carbono</span>
                    </button>
                </div>
                <div class="info">
                    <button class="learn-more">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Podría interesarte...</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="imagenes" style="text-align:center;border-color: black;">
            <div class="column">
                <div style="border-style:solid;border-color:#a8e997;border-radius:10px;"></div>
            </div>
            <div class="column">
                <img src="/images/logos.jpg" style="width:50%">
            </div>
        </div>
    </div>
</div>
@endsection
