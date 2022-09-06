@extends('navegador')

@section('Contenido')

<h1>Registro de Ventas // version 1, manera simple de hacer</h1>

{{-- <a href="{{Route('Empleado.create')}}"> Crear Empleado</a> <br> --}}

    <form action="{{Route('Venta.store')}}" method="POST">
        @csrf
        @method('POST')

        <label for="">Empleado: {{$empleado->nombre_usuario}}</label> <br>
        {{-- <input type="number" name="ci_emplaedo" id="" value="" > <br> --}}

        <label for=""> Senior(es): </label>
        <select name="" id="">
            @foreach ($clientes as $c)
                <option value="{{$c->ci}}">{{$c->nombre}} {{$c->apellido}}</option>
            @endforeach
        </select>
        <label for="">// seleccione un cliente </label><br>
        <a href="{{Route('Cliente.create')}}">
            Crear Cliente //por si el cliente no esta registrado
        </a> <br>

        <label for="">Telefono</label>
        <input type="number" name="telefono" id="" value=""  > <br>

        <label for="">Empresa</label>
        <input type="text" name="empresa" id="" value="" > <br>

        <label for="">CI/NIT</label>
        <input type="number" name="nit" id="" value="" > <br>


         <label for="">Monto Total </label>
        <input type="number" name="monto_total" id="" value=""> <br>


        <h1>Lsita de Productos a comprar</h1>



        <table>
            <tr>
                <th> </th>
                <th>ITEM - </th>
                <th>Codigo - </th>
                <th>Cantidad- </th>
                <th>Detalle - </th>
                <th>P/unidad - </th>
                <th>total - </th>
            </tr>
            @for ($i = 0; $i<5;$i++)
            <tr>
                <td>{{$i+1}} </td>
                <td> <input type="number" name="item[]" id="" value="" > </td>
                <td> <input type="number" name="codigo[]" id="" value="" > </td>
                <td> <input type="number" name="cantidad[]" id="" value="" > </td>
                <td> <input type="text" name="detalle[]" id="" value="" > </td>
                <td> <input type="text" name="P/unidad[]" id="" value="" > </td>
                <td> <input type="number" name="total[]" id="" value="" > </td>
            </tr>
            @endfor
        </table>


        <button type="submit">Guardar</button>
    </form>

@endsection
