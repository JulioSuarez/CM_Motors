<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PruebasController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\PapelController;

use PHPUnit\Framework\MockObject\Rule\Parameters;

//use App\Http\Controllers\Contr;
// use App\Http\Controllers\PruebasController;
// use App\Http\Controllers\PruebasController;
// use App\Http\Controllers\PruebasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});


Route::get('Login',[AuthController::class,'login'])
->name('Login');
Route::post('Login',[AuthController::class,'loginStore'])
     ->name('LoginStore');
Route::get('Dashboard',[AuthController::class,'dashboard'])
     ->name('Dashboard');
Route::post('Logout',[AuthController::class,'logout'])
     ->name('Logout');

/////////////////PRUEBAS
Route::get('pruebas',[PruebasController::class, 'index']);

//////////// clientes
Route::resource('Cliente', ClienteController::class)->except(['show'])
    ->Parameters(['Cliente'=>'cliente'])->names('Cliente');

Route::get('pdf', [ClienteController::class, 'pdf'])->name('cliente.pdf');
Route::get('lista', [ClienteController::class, 'variables'])->name('lista');


///////////////empleado
Route::resource('Empleado', EmpleadoController::class)->except(['show'])
    ->Parameters(['Empleado'=>'empleado'])->names('Empleado');


    ///////////////////producto
Route::resource('Producto', ProductoController::class)->except(['show'])
    ->Parameters(['Producto'=>'p'])->names('Producto');

/////////////////PROVEEDOR
Route::resource('Proveedor', ProveedorController::class)->except(['show'])
    ->Parameters(['Proveedor'=>'p'])->names('Proveedor');


//////////////////UBICACION
Route::resource('Ubicacion', UbicacionController::class)->except(['show'])
->Parameters(['Ubicacion'=>'ubicacion'])->names('Ubicacion');


Route::get('Estante/create', [UbicacionController::class,'createEstante'])->name('Estante.create');
Route::post('Estante/store',[ UbicacionController::class,'storeEstante'])->name('Estante.store');
Route::get('Estante/{estante}/edit', [UbicacionController::class,'editEstante'])->name('Estante.edit');
Route::put('Estante/{estante}/update', [UbicacionController::class,'updateEstante'])->name('Estante.update');
Route::delete('Estante/{estante}/delete', [UbicacionController::class,'deleteEstante'])->name('Estante.delete');

Route::get('Sector/create', [UbicacionController::class,'createSector'])->name('Sector.create');
Route::post('Sector/store',[ UbicacionController::class,'storeSector'])->name('Sector.store');
Route::get('Sector/{sector}/edit', [UbicacionController::class,'editSector'])->name('Sector.edit');
Route::put('Sector/{sector}/update', [UbicacionController::class,'updateSector'])->name('Sector.update');
Route::delete('Sector/{sector}/delete', [UbicacionController::class,'deleteSector'])->name('Sector.delete');



Route::resource('Venta', VentasController::class)->except(['show'])
->Parameters(['Venta'=>'venta'])->names('Venta');


Route::get('papel', [PapelController::class, 'index']);

//Mi parte no me la toque --------------------------------
Route::get('/register',[AuthController::class,'register_index'])->name('register.index');
Route::post('/register',[AuthController::class,'register_store'])->name('register.store');
