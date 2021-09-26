<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Favorito;

class Usuario extends Model
{
    use HasFactory;
    protected $table ="usuario";
   
    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }

    public function favoritos()
    {
        return $this->hasMany(Favorito::class);
    }
}
