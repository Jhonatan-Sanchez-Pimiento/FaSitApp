<?php

namespace App\Http\Controllers;

use App\Classes\FavoritoClass;
use Illuminate\Http\Request;
use App\Models\Favorito;   

class FavoritoController extends Controller
{
    public function index()
    {
        $favoritos = Favorito::paginate(10);
        return view('favorito.index',compact('favoritos'));
    }

    public function create()
    {
        return view('favorito.create');
    }

    public function show(Favorito $favorito)
    {
        return view('favorito.show', compact('favorito'));
    }    

    public function registrar(Request $request)
    {
            
            $this->validate($request , [
                'nombre' => 'required',
                'titulo' => 'required'
            ]);
            dd($request->all());
            $favorito = new Favorito();
            return FavoritoClass::almacenarDatos($request, $favorito);
            
     }

    public function edit(Favorito $favorito)
    {
        return view('favorito.edit', compact('favorito'));
    }

    public function actualizar(Request $request, Favorito $favorito)
    {
        return FavoritoClass::almacenarDatos($request, $favorito);
    }
}
