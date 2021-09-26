<?php

namespace App\Classes;

use App\Models\Favorito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class FavoritoClass {
    public static function almacenarDatos(Request $request, Favorito $favorito)
    {
        $favorito->nombre = $request->nombre;
        $favorito->usuario_id = $request->usuarioId;

        $favorito->save();

        return redirect()->route('favorito.show', $favorito);
    }

    public static function getFavorito($id)
    {
        $favorito = DB::select('SELECT * FROM favorito where id=' . $id);
        return $favorito;
    }

}

?>