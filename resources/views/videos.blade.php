@extends('layouts.app')

@section('content')

<h1 class="display-3 text-center fw-bolder">
        VIDEOS
    </h1>
    <div class="card" style="padding-right: 90px; padding-left: 90px;">
        <div class="rounded d-block mt-5">
            <div class="modal-content card mb-3">
                <h1 class="display-5 text-center fw-bolder">
                    Videos del día
                </h1>
                
                @foreach ($videos as $vid)
                <div class="p-4">
                    <div class="card" style="max-width: width auto;">
                        <div class="row">
                          <div class="col-7">
                          <iframe width="100%" height="300" src="{{$vid->enlace}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
                        </div>
                          <div class="col">
                            <div class="card-body">
                              <h5 class="card-title text-primary fw-bolder fs-5">{{$vid->nombre}}</h5>
                              <p class="card-text fw-bold fs-6">Duración: {{$vid->duracion}}</p>
                              <p class="card-text fw-bold fs-6">Categoria:  {{$vid->categoria}}</p>
                            </div>                    
                            <ul>
                                Calificación: {{$vid->calificacion}} 
                                <i class="fas fa-star"></i>
                            </ul>
                        </div>
                        </div>
                      </div>
                </div>
                @endforeach
                
             </div>
        </div>
    </div>

@endsection