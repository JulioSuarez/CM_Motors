{{-- @extends('navegador')

@section('Contenido')
    <h1> Julio SE LA COMEE!!!!!!!!</h1>
    <br>
    <a href="{{Route('Login')}}"> Inicio Seccion</a>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
</head>
<body class='bg-gray-100'>
    <center>
        <header class="border-b bg-white shadow">
            <div class='container mx-auto flex justify-between items-center'>
                <h1 class='text-4xl font-black'>BIENVENIDO A NUESTRO PROYECTO</h1>
            <nav class="flex items-center">
                <img  src="{{ asset('img/logo.png') }}" alt="logotipo" width="50" height="50">
                <a class="font-bold uppercase text-gray-600 text-sm ml-3" href="{{Route('Login')}}">Inicio Sesión</a>
                <a class="font-bold uppercase text-gray-600 text-sm ml-3" href="{{Route('register.index')}}">Registrarme</a>
            </nav>
            </div>
        </header>
        <div class="container" class="max-h-max max-w-max">
            <img  src="{{ asset('img/bg.jpg') }}" alt="fondo" >
        </div>
    </center>
</body>
</html>
