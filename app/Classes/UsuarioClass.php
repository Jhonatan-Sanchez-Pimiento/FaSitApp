<?php

namespace App\Classes;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class UsuarioClass {
    public static function almacenarDatos(Request $request, Usuario $usuario)
    {
       //funcion que permite almacenar los datos
        $usuario->primer_nombre = $request->primerNombre;
        $usuario->segundo_nombre = $request->segundoNombre;
        $usuario->primer_apellido = $request->primerApellido;
        $usuario->segundo_apellido = $request->segundoApellido;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->save();

        return redirect()->route('usuario.show', $usuario);
        
    }

    public static function getUsuario($id)
    {
        $usuario = DB::table('usuario')->where('id',$id)->first();
        return $usuario;
    }

    public static function validarEmail($email)
    {
        $emailUsuario = DB::table('usuario')->where('email',$email)->first();
        if ($emailUsuario == null) {
            return true;
        } else {
            return false;
        }
    }
}

?>