@extends('layouts.app')

@section('content')
<div class="p-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card text-center" style="background-color: rgb(228, 228, 228);">
                <div class="card-body">
                    <h5 class="card-title display-6 fw-bold">Juegos</h5>
                  </div>
                  <a href="{{ route('juegos') }}" style="color: black;">
                    <i class="fas fa-dice fa-10x py-4"></i>
                  </a>
              </div>
            </div>
            <div class="col">
                <div class="card text-center" style="background-color: rgb(228, 228, 228);">
                  <div class="card-body">
                      <h5 class="card-title display-6 fw-bold">Videos</h5>
                    </div>
                    <a href="{{ route('videos') }}" style="color: black;">
                        <i class="fas fa-film fa-10x py-4"></i>
                    </a>
                </div>
              </div>
              <div class="col">
                <div class="card text-center" style="background-color: rgb(228, 228, 228);">
                  <div class="card-body">
                      <h5 class="card-title display-6 fw-bold">Datos curiosos</h5>
                    </div>
                    <a href="{{ route('datos') }}" style="color: black;">
                        <i class="fas fa-question-circle fa-10x py-4"></i>
                    </a>
                </div>
              </div>
              <div class="col">
                <div class="card text-center" style="background-color: rgb(228, 228, 228);">
                  <div class="card-body">
                      <h5 class="card-title display-6 fw-bold">Catálogo</h5>
                    </div>
                    <a href="{{ route('catalogos') }}" style="color: black;">
                        <i class="fas fa-book fa-10x py-4"></i>
                    </a>
                </div>
              </div>
        
          </div>
    </div>
@endsection