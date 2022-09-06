<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;//para enviar mensajes de error
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; //para encriptar contrasenas
use App\Models\Producto;

use App\Models\User;

class AuthController extends Controller
{
    public function login(){
       // dd('llegue !!1');
        return view('VistasAuth.login');
    }

    public function loginStore(Request $r){
         //del request solo sacame correo y contrasena

         $credenciales = $r->validate([
         'correo_electronico' =>['required','email','string'],
         'password'=>['required','string']
         ]);

        //filled, devuelve V o F si se dio click al inout recordar
        //$recordar = $r->filled('recordar');

        //sacar la tabla donde este esee correo
         $user = User::where('correo_electronico',$r->correo_electronico)
                   ->first();

        //usandon el Hash::check
        //Hash::check //recibe texo plano password, luego la encriptada en la Tabla
        if ($user != null and Hash::check($r->password,$user->password)){
            //hacer login
            Auth::login($user);

            //generar el token csrf
            $r->session()->regenerate();

            $bienvenida = 'Bienvenido '.(Auth::user()->nombre_usuario);
            //redirecciona a dashboard con una variable status

            return //intended, por sin entra ua una url protegida
                    redirect()->intended(Route('Dashboard'))
                    ->with('status',$bienvenida);
        } else if (!$user) {
            return back()->with('mensaje', 'Error correo electronico');
        } else {
            return back()->with('mensaje', 'Contraseña incorecta');
        }

        //false, login incorrecto redireccionar devuelta login
        //distafar un error de validacion
        // if ($user == null){ //si es nulo, significa que no encontro el correo
        //     throw ValidationException::withMessages([
        //         //meustra el eeroror del correo
        //         'correo'=> 'Correo no encontrado',
        //     ]);
        // }else {
        //     throw ValidationException::withMessages([
        //         //meustra el eeroror del correo
        //         'password'=> 'Contrasena Incorrecta',
        //     ]);
        // }


    }


    public function dashboard(){
        $user = Auth::user()->nombre_usuario;
        $producto = Producto::get();
        // dd($producto);
        return view('VistasAuth.dashboard',compact('user','producto'));
    }



    public function logout(Request $r) {
       // dd($r);
         Auth::logout();

        //invalidacion la seccion
        $r->session()->invalidate();

        //token crsf
        $r->session()->regenerateToken();

        return redirect()->Route('Login')->with('statusLogout',"Haz cerrado session");
    }

    public function register_index() {
        return view('VistasAuth.register');
    }

    public function register_store(Request $request){
        dd('$request');
    }

}
