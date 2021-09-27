<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Classes\UsuarioClass;
use App\Http\Requests\UsuarioRequest;


class UsuarioController extends Controller
{
   
    public function create()
    {
        return view('usuario.create');
    }

    public function show(Usuario $usuario)
    {
        return view('usuario.show', compact('usuario'));
    }    

    public function registrar(UsuarioRequest $request)
    {   
        if(UsuarioClass::validarEmail($request->email)==true){
            $usuario = new Usuario();
            return UsuarioClass::almacenarDatos($request, $usuario);
        }else{
            return 'ya existe el correo';
        }
     }

    public function edit(Usuario $usuario)
    {
        return view('usuario.edit', compact('usuario'));
    }

    public function actualizar(Request $request, Usuario $usuario)
    {
        return UsuarioClass::almacenarDatos($request, $usuario);
    }

}
