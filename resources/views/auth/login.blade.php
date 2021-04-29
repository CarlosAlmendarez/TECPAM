
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
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="rounded mx-auto d-block p-3 fs-4">
                        T E C P A M
                    </div>
                    <h1 class="display-6 fw-bold">
                        INICIO DE SESIÓN
                    </h1>
                        <div>
                            <div class="text-center">
                                <div class="p-3">
                                    <label for="email" class="form-label fw-bold fs-4">Nombre de usuario</label>
                                    <input id="email" type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="p-3">
                                    <label for="password" class="form-label fw-bold fs-4">Contraseña</label>
                                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                         </div>
                    <div class="text-center p-3">
                         <button class="btn btn-light fs-4" type="submit" role="button">Iniciar sesión</button>
                    </div>
                    <div class="text-center p-1">
                        <button class="btn btn-light fs-4" href="{{route('register')}" role="button">Registrarse</button>
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
