<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $favoritos = Usuario::paginate(10);
        return view('home', compact('favoritos')); 
    }
}
