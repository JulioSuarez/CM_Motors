<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Cleinten</h1>

    <form action="{{Route('Cliente.store')}}" method="POST">
        @csrf
        @method('POST')
        <label for="">ci </label>
        <input type="number" name="ci" id="" value=""> <br>

        <label for="">nombre </label>
        <input type="text" name="nombre" id="" value=""> <br>

        <label for="">apellido </label>
        <input type="text" name="apellido" id="" value=""> <br>
        <p> luego muetro los demas datos!!!</p>

        <button type="submit">Guardar</button>
    </form>

</body>
</html>
