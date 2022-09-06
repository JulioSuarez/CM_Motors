<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::get();
        //  dd($ps);
        return view('VistaProveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaProveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        //   dd('llegue');
        $c = new Proveedor();
        $c->ci = $r->ci;
        $c->nombre = $r->nombre;
        $c->apellido =  $r->apellido;
        // $c->nit =  $r->nit;
        // $c->email = $r->emial;
        // $c->telefono =  $r->telefono;
        //$c->direccion = $r->direccion;
        $c->save();

        return redirect()->route('VistaProveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::where('id', $id)->first();
        // dd($cliente);
        return view('VistaProveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Proveedor $proveedor,$proveedor__id)
    {
        // dd($proveedor__id);
        $proveedor = Proveedor::find($proveedor__id);
        $proveedor->update($r->all());
        $proveedor->save();
        return redirect()->route('Proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
