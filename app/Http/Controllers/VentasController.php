<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Empleado;
use App\Models\Producto;
use App\Models\Cliente;

use Illuminate\Support\Facades\Auth;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::get();

        return view('VistaVentas.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dd('Holaa');
        $clientes = Cliente::get();
        $user = Auth::user()->id;
     //   dd($user);
        $empleado = Empleado::join('users','users.id','=',
        'empleados.id_usuario')->select('empleados.*','users.nombre_usuario')
        ->where('id_usuario',$user)->first();
  
        return view('VistaVentas.create',compact('clientes','empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = new Venta();
        $r->id = 501;
        $r->monto_total = 120;
        $r->fecha =  '2022-08-30';
        $r->hora =  '20:15:07';
        $r->ci_cliente = 75432;
        $r->ci_empleado =  897333;
        $r->save();


        $r = new DetalleVenta();
        $r->id = 1111;
        $r->cantidad = 3;
        $r->precio =  120;
        $r->id_producto = 9001 ;
        $r->id_venta = 501;
        $r->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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


    //cotizaciones

}
