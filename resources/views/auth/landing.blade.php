@extends('layout.auth')

@section('main-content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
<style>
    .banner {
        background-image: linear-gradient(100deg, #000000, #00000020),
        url('/coffeetime/public/images/Inicio.jpg');
        height: 65rem;
        background-size: cover;
        background-position: center;
    }
    .content-banner {
        max-width: 90rem;
        margin: 0 auto;
        padding: 25rem 0;
    }

    .content-banner h2 {
        color: #fff;
        font-size: 3.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    .content-banner a {
        margin-top: 2rem;
        text-decoration: none;
        color: #fff;
        background-color: var(--primary-color);
        display: inline-block;
        padding: 1rem 3rem;
        text-transform: uppercase;
        border-radius: 3rem;
    }
    .text-center {
    text-align: center;
    }

    .big-text {
    font-size: 18px;
    }
    .row {
        display: flex;
        flex-direction: row-reverse;
    }
    .col-md-4 {
        order: 2;
    }
    .col-md-8 {
        order: 1;
    }

</style>
</head>
  <body>
    <section class="banner">
        <div class="content-banner">
            <h2>BIENVENIDO</h2>
        </div>
    </section>
    <br />
    <div class="container">
        <hr>
        <h1 class="text-center underline-title">QUIENES SOMOS</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/somos.jpg') }}">
            </div>
            <div class="col-md-8 d-flex align-items-center justify-content-end">
                <div>
                    <br />
                    <p class="big-text">
                        Bienvenidos a Coffee Time, un rincón acogedor donde la pasión por el café se encuentra con la calidez de la hospitalidad.
                        En Coffee Time, no solo servimos café; creamos experiencias. Somos mucho más que una cafetería, somos un lugar donde los aromas
                        y sabores se entrelazan para dar vida a momentos memorables.
                    </p>
                    <br />
                </div>
            </div>
        </div>
    </div>
<br />
<br />
<div class="container">
    <hr>
    <h1 class="text-center underline-title">MISIÓN</h1>
    <div class="row">
        <div class="col-md-8 order-md-2 d-flex align-items-center">
            <div>
                <br />
                <p class="big-text">
                    En Coffee Time, nos apasiona crear experiencias excepcionales en
                    torno al café. Nuestra misión es simple pero poderosa: deleitar
                    a nuestros clientes con cada taza que servimos y convertir cada visita en un momento especial.
                </p>
                <br />
            </div>
        </div>
        <div class="col-md-4 order-md-1">
            <img src="{{ asset('images/Mision.jpg') }}" class="img-fluid">
        </div>
    </div>
</div>
<br />
<br />
<div class="container">
    <hr>
    <h1 class="text-center underline-title">VISÓN</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/Vision.jpg') }}" class="img-fluid">
        </div>
        <div class="col-md-8 d-flex align-items-center justify-content-end">
            <div>
                <br />
                <p class="big-text">
                    En Coffee Time, aspiramos a ser mucho más que una cafetería de renombre.
                    Nuestra visión es la brújula que guía nuestro camino hacia el futuro
                    y nos inspira a alcanzar nuevas alturas en la industria del café y la hospitalidad
                </p>
                <br />
            </div>
        </div>
    </div>
</div>
<br />
<br />
<div class="container">
    <hr>
    <h1 class="text-center underline-title">VALOR</h1>
    <div class="row">
        <div class="col-md-8 order-md-2 d-flex align-items-center">
            <div>
                <br />
                <p class="big-text">
                    En Coffee Time, nuestros valores son el cimiento de todo lo que hacemos. Guiados por estos
                    principios fundamentales, trabajamos juntos para crear una experiencia
                    excepcional para nuestros clientes y para forjar relaciones significativas con nuestra comunidad.
                </p>
                <br />
            </div>
        </div>
        <div class="col-md-4 order-md-1">
            <img src="{{ asset('images/Valor.jpg') }}" class="img-fluid">
        </div>
    </div>
</div>
<br />
<br />
<br />
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
@endsection
