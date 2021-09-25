<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('usuario_id');
            $table->string('primer_nombre',15);
            $table->string('segundo_nombre',20)->nullable();
            $table->string('primer_apellido',15);
            $table->string('segundo_apellido',15)->nullable();
            $table->string('email')->unique();
            $table->string('contrasena',30);
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
        Schema::dropIfExists('usuario');
    }
}
