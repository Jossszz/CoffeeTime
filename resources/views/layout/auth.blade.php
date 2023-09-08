<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Time</title>
</head>
<body style="background-color: #f0d1a9;">
     <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #D2B48C;">
            <div class="container-fluid">
                <a class="navbar-brand">COFFEE TIME</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="{{ route('landing') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="{{ route('menu') }}">Menú</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark me-2" href="{{ route('login') }}">Sign up</a>
                        <a class="btn btn-outline-dark" href="{{ route('register') }}">Login</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    @yield('main-content')
</body>
</html>
