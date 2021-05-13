<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Vistas html TECPAM/index.css">
</head>
<body style="background-color: rgb(240,240,240);">
    <div class="modal-dialog text-center">
        <div class="rounded mx-auto d-block">
            <div class="modal-content card w-100 justify-content-center" style="background: linear-gradient(50deg, rgba(7, 185, 7, 0.747), rgba(7, 179, 179, 0.76));">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="rounded mx-auto d-block p-3 fs-4">
                        T E C P A M
                    </div>
                    <h1 class="display-6 fw-bold">
                        REGISTRO
                    </h1>
                        <div>
                            <div class="text-center">
                                <div class="p-3">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>    
                                </div>
                                <div class="p-3">
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                         </div>
                    <div class="text-center p-3">
                         <button class="btn btn-light fs-4" type="submit" role="button">Registrarse</button>
                    </div>
                    <div class="text-center p-1">
                        <a class="btn btn-light fs-4" href="{{ route('login') }}" role="button">Iniciar Sesión</a>
                    </div>
                    <div class="text-center p-5">
                        <a class="btn btn-light fs-4" href="{{route('welcome')}" role="button">Iniciar sin usuario</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
