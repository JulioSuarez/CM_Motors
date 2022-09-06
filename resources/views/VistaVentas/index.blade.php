@extends('navegador')

@section('Contenido')

    <h1> LISTA DE Ventas </h1>

    <p> <a href="{{Route('Venta.create')}}"> Realizar Venta</a></p>
    <table>
        <tr>
          <th>Nro_Venta - </th>
          <th>Nombre Cliente - </th>
          <th>Nombre Empleado - </th>
          <th>Fecha y hora - </th>
          <th>Monto Total - </th>
          <th>Ver Productps - </th>
          <th>Acciones - </th>
        </tr>
        </tr>
        @foreach ($ventas as $v )
        <tr>
            <td>{{$v->id }}</td>
            <td>{{$v->ci_cliente }}</td>
            <td>{{$v->ci_empleado }}</td>
            <td>{{$v->fecha}} - {{$v->hora}}</td>
            <td> hacer VER</td>


            <td><a href="{{Route('Venta.edit',$v->id)}}">Editar</a></td>


            <td>
                <form action="{{Route('Venta.destroy',$v->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"> Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection
