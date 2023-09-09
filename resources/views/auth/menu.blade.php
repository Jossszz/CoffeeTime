@extends('layout.auth')

@section('main-content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <h1>CAFÉ</h1><hr>
        @foreach($categories as $category)
        @if ($category->name === 'Café')
                <h2>{{ $category->nombre }}</h2>
                <ul class="list-group">
                    @foreach($category->products as $product)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/productos/espresso.jpg') }}" alt="{{ $product->name }}" class="img-fluid" width="140">
                                    </div>
                                    <div class="col-md-9">
                                        <strong>{{ $product->name }}</strong><br><br>
                                        Descripción: {{ $product->description }}<br><br>
                                        Precio: ${{ number_format($product->price) }}<br>
                                    {{-- Categoría: {{ $product->category->name }}--}}
                                    </div>
                                </div>
                            </li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </div>
    <br><br>
    <div class="container">
        <h1>PASTELERIA</h1><hr>
        @foreach($categories as $category)
            @if ($category->name === 'Pasteleria')
                <h2>{{ $category->nombre }}</h2>
                <ul class="list-group">
                    @foreach($category->products as $product)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/productos/amapola.jpg') }}" alt="{{ $product->name }}" class="img-fluid" width="140">
                                    </div>
                                    <div class="col-md-9">
                                        <strong>{{ $product->name }}</strong><br><br>
                                        Descripción: {{ $product->description }}<br><br>
                                        Precio: ${{ number_format($product->price) }}<br>
                                    {{-- Categoría: {{ $product->category->name }}--}}
                                    </div>
                                </div>
                            </li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </div>
    <br><br>
    <div class="container">
        <h1>SÁNDWICH</h1><hr>
         @foreach($categories as $category)
            @if ($category->name === 'Sandwich')
                <h2>{{ $category->nombre }}</h2>
                <ul class="list-group">
                    @foreach($category->products as $product)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/productos/jamon.jpg') }}" alt="{{ $product->name }}" class="img-fluid" width="140">
                                    </div>
                                    <div class="col-md-9">
                                        <strong>{{ $product->name }}</strong><br><br>
                                        Descripción: {{ $product->description }}<br><br>
                                        Precio: ${{ number_format($product->price) }}<br>
                                    {{-- Categoría: {{ $product->category->name }}--}}
                                    </div>
                                </div>
                            </li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </div>
    <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
@endsection
