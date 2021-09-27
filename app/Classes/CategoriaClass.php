<?php

namespace App\Classes;

use App\Models\Categoria;
use App\Models\usuario;
use App\Classes\LoginClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class CategoriaClass {
    public static function almacenarDatos(Request $request, Categoria $categoria)
    {
        //almacena datos en categoria
        $categoria->nombre = $request->nombre;
        //valida el usuario que inicio sesion
        $usuario= LoginClass::getUsuario();
        if($usuario != null){
            $categoria->usuario_id = $usuario->id;
        }
        
        $categoria->save();
        return redirect()->route('categoria.show', $categoria);
    }

    public static function getCategoria($id)
    {
        $categoria = DB::select('SELECT * FROM categoria where id=' . $id);
        return $categoria;
    }

}

?>