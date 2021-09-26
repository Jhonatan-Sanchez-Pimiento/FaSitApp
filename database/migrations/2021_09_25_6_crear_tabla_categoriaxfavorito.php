<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCategoriaxfavorito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoriaxfavorito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('favorito_id')->nullable();
            $table->foreign('categoria_id')->references('id')
                ->on('categoria')
                ->onDelete('set null');
            $table->foreign('favorito_id')->references('id')
                ->on('favorito')
                ->onDelete('set null');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoriaxfavorito');
    }
}
