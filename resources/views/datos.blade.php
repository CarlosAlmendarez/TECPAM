@extends('layouts.app')

@section('content')

<h1 class="display-3 text-center fw-bolder">
      DATOS CURIOSOS
  </h1>
  <div class="card" style="padding-right: 90px; padding-left: 90px; background-color: rgb(240,240,240);">
    <div class="rounded d-block">
      <div class="modal-content card mb-3">
      <div class="row"> 
        <div class="col-6">
          <h1 class="display-6 text-center fw-bolder">
            DATOS CURIOSOS
        </h1>
        @foreach ($datos as $dato)
        <div class="card bg-light p-3">
        <div class="col-6 p-3">
          <img src="{{$dato->imagen}}" class="img-thumbnail" width="500" height="600">
        </div>
          <div class="text-center">
            <p class="fs-2 p-5">
            {{$dato->texto}}
            </p> 
          </div>
        </div>
        @endforeach

        <div class="text-center p-3">
          <a class="btn btn-warning fs-5 fw-bold" href="#" role="button">Siguiente dato</a>
      </div>
        </div>
       
      </div>
      </div>
    </div>

    </div>

  </div>

@endsection