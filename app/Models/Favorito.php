<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Favorito extends Model
{
    use HasFactory;
    protected $table ="favorito";

public function usuario()
{
    return $this->belongsTo(Usuario::class, 'usuario_id');
}

}
