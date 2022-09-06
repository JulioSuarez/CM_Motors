@extends('navegador')

@section('Contenido')

     <h1> Cue ondaaaa  </h1>
    <form action="{{Route('Producto.store')}}" @method('POST')>
    @csrf
    {{-- <label for=""> Cod_OEM </label>
    <input type="text" name="cod_oem" id="" value=""> <br>

    <label for="">Cod_sustituto </label>
    <input type="number" name="code_sustituto" id="" value=""> <br>

    <label for="">Nombre </label>
    <input type="text" name="nombre" id="" value=""> <br>

    <label for="">Descripcion </label>
    <input type="text" name="descripcion" id="" value=""> <br>

    <label for="">Cantidad </label>
    <input type="number" name="cantidad" id="" value=""> <br>

    <label for="">Cant. minima </label>
    <input type="number" name="cant_minima" id="" value=""> <br>

    <label for="">Precio 1 </label>
    <input type="number" name="precio1" id="" value=""> <br>

    <label for="">Precio 2 </label>
    <input type="number" name="precio2" id="" value=""> <br>

    <label for="">fecha de expiracion </label>
    <input type="date" name="fecha_expiracion" id="" value=""> <br>

    <label for="">Tienda </label>
    <input type="text" name="tienda" id="" value=""> <br>

    <label for="">Unidad </label>
    <input type="text" name="unidad" id="" value=""> <br>

    <label for="">Estado </label>
    <input type="text" name="estado" id="" value=""> <br>

    <label for="">Catergoria </label>
    <input type="number" name="categoria" id="" value=""> <br>

    <label for="">Proveedor </label>
    <input type="number" name="proveedor" id="" value=""> <br>

    <label for="">Ubicacion </label>
    <input type="text" name="Ubicacion" id="" value=""> <br> --}}

    <button type="submit">Guardar </button>

</form>

 {{-- <form action="{{Route('Producto.store')}}" @method('POST')>
    @csrf

        <!-- component -->
    <div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-8 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
            style="background-image: url(https://images.unsplash.com/photo-1532423622396-10a3f979251a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-xl w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                        <div class="flex flex-col sm:flex-row items-center">
                            <h2 class=" font-semibold text-lg text-black mr-auto">LISTA PRODUCTOS</h2>
                            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                        </div>
                        <div class="mt-5">
                            <div class="form">
                                <div class="md:space-y-2 mb-3">
                                    <label class="text-xs font-semibold text-gray-600 py-2">
                                        Foto de producto
                                        <abbr class="hidden" title="required">*</abbr>
                                    </label>
                                    <div class="flex items-center py-6">
                                        <div class="w-24 h-24 mr-4 flex-none rounded-xl border overflow-hidden ">
                                            <img class="w-24 h-24 mr-4 object-cover " src="https://www.trucosface.com/imgs/trucosfacebookbiz-silueta-mosca-hombre.jpg" alt="Avatar Upload">
                                        </div>
                                        <label class="cursor-pointer ">
                                            <span class="focus:outline-none  flex text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Agregar Foto</span>
                                            <input type="file" class="hidden" :multiple="multiple" :accept="accept">
                                        </label>
                                    </div>
                                </div>



                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Cod OEM <abbr title="required">*</abbr></label>
                                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                             <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Cod Sustituto <abbr title="required">*</abbr></label>
                                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Nombre <abbr title="required">*</abbr></label>
                                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                            {{-- <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Descripcion <abbr title="required">*</abbr></label>
                                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Cantidad <abbr title="required">*</abbr></label>
                                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                            {{-- <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Cantidad Minima <abbr title="required">*</abbr></label>
                                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">precio1 <abbr title="required">*</abbr></label>
                                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                            {{-- <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">precio2 <abbr title="required">*</abbr></label>
                                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Foto <abbr title="required">*</abbr></label>
                                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                            {{-- <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Fecha de Expiracion
                                                <abbr title="required">*</abbr>
                                            </label>
                                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Unidad <abbr title="required">*</abbr></label>
                                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                            {{-- <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Categoria <abbr title="required">*</abbr></label>
                                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Proveedor <abbr title="required">*</abbr></label>
                                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                            {{-- <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Ubicacion <abbr title="required">*</abbr></label>
                                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        </div>
                                    </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <button type="submit"> Guardar</button>
</form> --}}

@endsection
