<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Classes\LoginClass;

use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $usuario = new Usuario;
        $usuario = DB::table('usuario')->where('email', $request->email)->first();
        if($usuario != null ){
        if (($usuario->email == $request->email) && ($usuario->password == $request->password)) {
            $estado = true;
            LoginClass::setSesion($estado);
            LoginClass::setUsuario($usuario);
            $usuario = LoginClass::getUsuario();
            return 'Iniciado sesion como ' . $usuario->id;
        } elseif ($usuario->email == $request->email) {
            return 'contraseña equivocada';
        } 
    } else {
        return 'usuario no existe';
    }
    }
}
