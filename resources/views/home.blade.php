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
                <div class="carousel-item @if($noticia->id_noticia == 1) active @endif" style=" width:100%; max-height: 500px;margin-top:10px;">
                    <img src="{{$noticia->imagen}}" class="d-block w-100" alt="{{$noticia->id_noticia}}" style ="float: left;width: 500px;height: 500px;object-fit: cover;border-radius:10px;">
                        <div class="carousel-caption d-none d-md-block"> 
                            <h5>{{$noticia->encabezado}}</h5>
                            <p>{{$noticia->resumen}}</p>
                        </div>
                </div>
                @endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h5>
            En este aplicativo podrás medir tu Huella de Carbono, calculando la cantidad de gases de efecto invernadero 
            generados por tus actividades cotidianas. Buscamos con este aplicativo, la consientización en las personas 
            de que sus actividades cotidianas pueden estar afectando directamente al medio ambiente y así, poder reducir 
            poco a poco su impacto negativo.
        </h5><br>
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
                    <button class="learn-more" onclick="location='/formulario/grafica'">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Mirar gráfica</span>
                    </button>
                </div>
                <div class="info">
                    <button class="learn-more" onclick="location.href = 'https://www.manosverdes.co/huella-de-carbono-y-su-impacto-ambiental/#:~:text=Los%20gases%20que%20mide%20este,del%20nivel%20del%20mar%2C%20etc.'">
                        <span class="circle" aria-hidden="true" >
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
