@extends('navegador')

@section('Contenido')

    <h1>
        UBICAIONES
    </h1>

    <a href="{{Route('Ubicacion.create')}}"> Crar Ubicacion</a>
    <a href="{{Route('Ubicacion.create')}}"> Crar Estante</a>
      <a href="{{Route('Ubicacion.create')}}"> Crar Sector</a>


    <H1> LISTA DE UBICACIONES</H1>
    <table>
        <tr>
            <th> Cod Ubicacion  </th>
            <th> Cod Estante </th>
            <th> Nombre Estante </th>
            <th> Cod Sector</th>
            <th> Nombre Sector </th>
            <th> Aciones </th>
        </tr>
        @foreach ($ubicaciones as $ubi )
        <tr>
            <td> {{$ubi->codigo_ubi}}</td>
            <td> {{$ubi->codigo_estantes}}</td>
            <td> {{$ubi->nombre_estante}}</td>
            <td> {{$ubi->nombre_sector}}</td>
            <td> {{$ubi->nombre_sector}}</td>
            <td> <a href="{{Route('Ubicacion.edit',$ubi->id)}}">Editar</a> </td>
            <td> <form action="{{Route('Ubicacion.destroy',$ubi->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Desea Eliminar?')"
                        type="submit"> Eliminar
                </button>
             </form>
        </td>
        </tr>
        @endforeach
    </table> <br>  <p> -----------------------------------------</p>
    <H1> LISTA DE ESTANTES</H1>
    <table>
        <tr>
            <th> Codigo  </th>
            <th> Nombre </th>
            <th> Descripcion </th>
            <th> columnas</th>
            <th> filas </th>
            <th> sector </th>
            <th> Acciones </th>
        </tr>
        @foreach ($estantes as $est )
        <tr>
            <td> {{$est->id}}</td>
            <td> {{$est->nombre}}</td>
            <td> {{$est->descripcion}}</td>
            <td> {{$est->nro_columnas}}</td>
            <td> {{$est->nro_filas}}</td>
            <td> {{$est->nombre_sector}}</td>
            <td> <a href="{{Route('Estante.edit',$est->id)}}">Editar</a></td>
            <td> <form action="{{Route('Estante.delete',$est->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Desea Eliminar?')"
                            type="submit"> Eliminar
                    </button>
                 </form>
            </td>
        </tr>
        @endforeach
    </table> <br>   <p> -----------------------------------------</p>

    <H1> LISTA DE SECTOR</H1>
    <table>
        <tr>
            <th> Codigo   </th>
            <th> Nombre </th>
            <th> Descripcion </th>
            <th> Acciones </th>
        </tr>
        @foreach ($sectores as $s )
        <tr>
            <td> {{$s->id}}</td>
            <td> {{$s->nombre}}</td>
            <td> {{$s->descripcion}}</td>
            <td> <a href="{{Route('Sector.edit',$s->id)}}">Editar</a></td>
            <td> <form action="{{Route('Sector.delete',$s->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Desea Eliminar?')">
                     Eliminar
                    </button>
                </form>

            </td>
            {{-- <td>
                <form action="{{ Route('Sector.delete', $p->ci) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="ELIMINAR" class=""
                        onclick="return confirm('Desea Eliminar?')">
                </form>
            </td> --}}


        </tr>
        @endforeach
    </table> <br>

@endsection
