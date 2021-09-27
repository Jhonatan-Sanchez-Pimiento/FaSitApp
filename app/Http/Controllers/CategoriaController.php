<?php

namespace App\Http\Controllers;

use App\Classes\CategoriaClass;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('categoria.index',compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function show(Categoria $categoria)
    {
        return view('categoria.show', compact('categoria'));
    }    

    public function registrar(Request $request)
    {
            
            $this->validate($request , [
                'titulo' => 'required'
            ]);
            $categoria = new Categoria();
            return CategoriaClass::almacenarDatos($request, $categoria);
            
     }

    public function edit(Categoria $categoria)
    {
        return view('categoria.edit', compact('categoria'));
    }

    public function actualizar(Request $request, Categoria $categoria)
    {
        return CategoriaClass::almacenarDatos($request, $categoria);
    }

    public function destroy(Categoria $categoria)
    { 
      $categoria->delete();
      return redirect()->route('categoria.index');
    }
}
