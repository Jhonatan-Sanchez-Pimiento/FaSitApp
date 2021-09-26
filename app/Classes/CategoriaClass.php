<?php

namespace App\Classes;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class CategoriaClass {
    public static function almacenarDatos(Request $request, Categoria $categoria)
    {
        $categoria->nombre = $request->nombre;
        $categoria->usuario_id = $request->usuarioId;

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