<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <body style="background-image: url('/coffeetime/public/images/Inicio.jpg')">
    <nav class="navbar navbar-expand-lg" style="background-color: #D2B48C;">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="{{ asset('images/logo.png') }}" width="60">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="{{ route('landing') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="{{ route('menu') }}">Menú</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-xl-5 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Crear Cuenta</h1>
                                        </div>
                                        <form action="{{ route('register.store') }}" method="post">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" required id="name" type="text" placeholder="Nombres"
                                                    name="name" />
                                                <label for="name">Nombres</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" required id="surname" type="text" placeholder="Apellidos"
                                                    name="surname" />
                                                <label for="surname">Apellidos</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" required id="email" type="text" placeholder="email"
                                                    name="email" />
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" required id="password" type="password" placeholder="password"
                                                    name="password" />
                                                <label for="password">Contraseña</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" required id="password" type="password"
                                                    placeholder="password_confirmation" name="password_confirmation" />
                                                <label for="password_confirmation">Repetir contraseña</label>
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-dark px-4" type="submit">Registrarse</button>
                                            </div>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" style="color: black;" href="{{ route('login') }}">Inicar Sesión</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
