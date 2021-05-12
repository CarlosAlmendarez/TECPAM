@extends('layouts.app')

@section('content')

<h1 class="display-3 text-center fw-bolder" onload="cargar()">
      DATOS CURIOSOS
  </h1>
  <div class="card" style="padding-right: 90px; padding-left: 90px; background-color: rgb(240,240,240);">
    <div class="rounded d-block">
      <div class="modal-content card mb-3">
          <div class="row"> 
              <div class="col">
                          <h1 class="display-6 text-center fw-bolder">
                          {{$datos[$c]->titulo}}
                          </h1>
              </div>
          </div>  
                <div class="card bg-light">
                  <div class="row">
                    <div class="col-6 p-5" id="img">
                      <img src="{{$datos[$c]->imagen}}" width="100%">
                    </div>
                    <div class="text-center col-6 fs-3 p-5">
                      {{$datos[$c]->texto}}    
                    </div>
                  </div>
                </div>

                <div class="text-center m-3 col-12 p-0">
                  <a class="btn btn-warning fs-5 fw-bold" href="{{ route('dat', $c) }}">Siguiente dato</a>
                </div>

      </div>
    </div>

  </div>

@endsection


