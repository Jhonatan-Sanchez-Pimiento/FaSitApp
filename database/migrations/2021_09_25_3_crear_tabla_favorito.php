<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaFavorito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorito', function (Blueprint $table) {
            $table->id('favorito_id');
            $table->string('titulo');
            $table->text('favorito_url',2083)->nullable();
            $table->boolean('visibilidad')->default(false)->comment('false=Publico , true=privado');
            $table->dateTime('fecha_creacion_usuario')->nullable();
            $table->dateTime('fecha_modificacion_usuario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorito');
    }
}
