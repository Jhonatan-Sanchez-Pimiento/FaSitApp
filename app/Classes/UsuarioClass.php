<?php

namespace App\Classes;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class UsuarioClass {
    public static function almacenarDatos(Request $request, Usuario $usuario)
    {
        $usuario->primer_nombre = $request->primerNombre;
        $usuario->segundo_nombre = $request->segundoNombre;
        $usuario->primer_apellido = $request->primerApellido;
        $usuario->segundo_apellido = $request->segundoApellido;
        $usuario->email = $request->email;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();

        return redirect()->route('usuario.show', $usuario);
    }

    public static function getUsuario($id)
    {
        $usuario = DB::select('SELECT * FROM usuario where id=' . $id);
        return $usuario;
    }

    public function validarEmail($email)
    {
        $emailUsuario = Usuario::where('email', $email);
        if (!empty($emailUsuario)) {
            return true;
        } else {
            return false;
        }
    }
}

?>