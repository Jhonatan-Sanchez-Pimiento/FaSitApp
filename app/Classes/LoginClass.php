<?php

namespace App\Classes;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

$estado;

class LoginClass{
    protected static $estado =false;
    protected static $usuario;

    public static function setSesion($estado)
    {
        //se recibe parametro donde false = no-logeado y true=logeago
            self::$estado = $estado;
    }

    public static function getSesion(){
        //se devuelve el valor del estado
        return self::$estado;
    }

    public static function setUsuario($usuario){
        self::$usuario =$usuario;
    }

    public static function getUsuario(){
        if(self::$usuario != null){
            return self::$usuario;
        }
    }
}


?>