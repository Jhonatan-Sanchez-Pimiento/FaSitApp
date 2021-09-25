<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Home::get();

        return view('blog', compact('tituloFavorito')); 
    }
}
