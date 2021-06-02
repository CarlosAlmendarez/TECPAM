@extends('layouts.app')

@section('content')

<h1 class="display-3 text-center fw-bolder">
      CATÁLOGO
    </h1>
    <div class="card" style="padding-right: 80px; padding-left: 80px; background-color: rgb(240,240,240);">
        <div class="rounded d-block">
            <div class="modal-content card mb-3">
                <h1 class="display-5 text-center fw-bolder">
                    Enlaces
                </h1>
                <!-- New section -->
                <div class="row">
                <ul class="nav nav-pills mb-5 ml-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ route('catalogo-doc') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Documentos</p>
                            <i style="color: black;" class="p-3 fab fa-dochub fa-3x"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('catalogo-libro') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Libros</p>
                            <i style="color: black;" class="fas fa-book-open p-3 fa-3x"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('catalogo-articulo') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Artículos</p>
                            <i style="color: black;" class="fas fa-glasses p-3 fa-3x"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('catalogo-poema') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Poemas</p>
                            <i style="color: black;" class="fas fa-feather p-3 fa-3x"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('catalogo-pelicula') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Peliculas</p>
                            <i style="color: black;" class="fas fa-video p-3 fa-3x"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('catalogo-noticia') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Noticias</p>
                            <i style="color: black;" class="far fa-newspaper p-3 fa-3x"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('catalogo-receta') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Recetas</p>
                            <i style="color: black;" class="fas fa-utensil-spoon p-3 fa-3x"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item mx-auto" role="presentation">
                    <a href="{{ route('catalogo-otro') }}" class="btn btn-outline-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="fs-4 text-center">
                            <p>Otros</p>
                            <i style="color: black;" class="p-3 far fa-list-alt fa-3x"></i>
                        </div>
                    </a>
                </li>
                </ul>
                </div>
                <!-- End New Section-->
                <div class="card mt-3 row">
                    <ul class="list-group">
                        <h1 class=" px-3 display-5">
                            Enlaces
                        </h1>
                        @foreach ($catalogos as $enlace)
                        <a href="{{$enlace->enlace}}" class="list-group-item list-group-item-action">
                            <li class="list-group-item fs-4">  
                            {{$enlace->tipo}} -> {{$enlace->nombre}}                  
                            </li>
                        </a> 
                        @endforeach

                    </ul>
                </div>
                
             </div>
        </div>
    </div>

  </div>

@endsection