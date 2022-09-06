<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Editar Proveedor</h1>

    <form action="{{Route('Proveedor.update',$proveedor->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">id</label>
        <input type="number" name="id" id="" value="{{$proveedor->id}}"> <br>

        <label for="">nombre </label>
        <input type="text" name="nombre" id="" value="{{$proveedor->nombre}}"> <br>

        {{-- <label for="">apellido </label> --}}
        {{-- <input type="text" name="apellido" id="" value="{{$proveedor->apellido}}"> <br> --}}

        <label for="">nit</label>
        <input type="number" name="nit" id="" value="{{$proveedor->nit}}"> <br>

        <label for="">tipo </label>
        <input type="text" name="tipo" id="" value="{{$proveedor->tipo}}"> <br>


        <p> luego muetro los demas datos!!!</p>

        <button type="submit">Guardar</button>
    </form>



</body>
</html>
