@extends('navegador')

@section('Contenido')
    <h1> LISTA DE PRODUCTOS </h1> <br>
    <a href="{{ Route('Producto.create') }}"> Crear Producto</a>

    <div class=" mx-8 overflow-hidden rounded-lg shadow-xs">
        <!-- reemplace w-full por mx-8 -->
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b
                dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Productos</th>
                        <th class="px-4 py-3">Precio</th>
                        <th class="px-4 py-3">Estado</th>
                        <th class="px-4 py-3">Fecha de Expiración</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>

                <tbody class=" bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    @foreach ($productos as $p)
                        <tr
                            class=" bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://galba.com.bo/wp-content/uploads/2022/07/CF0001.jpg" alt=""
                                            loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $p->nombre }}</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">{{ $p->descripcion }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">{{ $p->precio1 }}</td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{ $p->estado }} </span>
                            </td>
                            <td class="px-4 py-3 text-sm">{{ $p->fecha_expiracion }}</td>
                            <td class="px-4 py-3 text-sm">
                                <button type="button"
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    <a href="{{ Route('Producto.edit', $p->id) }}">
                                        EDITAR
                                    </a></butto>
                                    <button type="button"
                                        class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                        <form action="{{ Route('Producto.destroy', $p->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="ELIMINAR" class=""
                                                onclick="return confirm('Desea Eliminar?')">
                                        </form>
                                    </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
