<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::get();
     //   dd($productos);
        return view('VistaProductos.index',compact('productos'));
    }

    public function productosMinimos(){
        $producto = Producto::get();

        //relacinarlo con categoria, proveevor y ubicaion
        $producto = Producto::get();

        // dd('entre');
        return view('VistasAuth.dashboard',compact('producto'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaProductos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $pequest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        dd('llegue!!');

        $p = new Producto();
        $p->cod_oem = $r->cod_oem ;
        $p->cod_sustituto = $r->cod_sustituto;
        $p->nombre = $r->nombre;
        $p->descripcion = $r->descripcion;
        $p->cantidad = $r->cantidad;
        $p->cant_minima = $r->cant_minima;
        $p->precio1 = $r->precio1;
        $p->precio2 = $r->precio2;
        $p->foto = $r->foto;
        $p->fecha_expiracion = $r->fecha_expiracion;
        $p->nombre_tienda = $r->nombre_tienda;
        $p->unidad = $r->unidad;
        $p->estado = $r->estado;
        $p->categoria = $r->categoria;
        $p->id_proveedor = $r->proveedor;
        $p->id_ubicacion = $r->ubicacion;
        $p->save();


       return redirect()->route('Producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($p)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $p)
    {
        $productos = $p;
        return view('VistaProductos.edit',compact('productos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $pequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Producto $p)
    {
         $p->cod_oem = $r->cod_oem ;
         $p->cod_sustituto = $r->cod_sustituto;
         $p->nombre = $r->nombre;
         $p->descripcion = $r->descripcion;
         $p->cantidad = $r->cantidad;
         $p->cant_minima = $r->cant_minima;
         $p->precio1 = $r->precio1;
         $p->precio2 = $r->precio2;
         $p->foto = $r->foto;
         $p->fecha_expiracion = $r->fecha_expiracion;
         $p->nombre_tienda = $r->nombre_tienda;
         $p->unidad = $r->unidad;
         $p->estado = $r->estado;
         $p->categoria = $r->categoria;
         $p->id_proveedor = $r->proveedor;
         $p->id_ubicacion = $r->ubicacion;
         $p->save();

        return redirect()->route('Producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $p)
    {
        $p->delete();
        return redirect()->route('Producto.index');

    }
}
