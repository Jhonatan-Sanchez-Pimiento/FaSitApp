<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AggColumnaTablaFavorito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('favorito', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('usuario_id')
                    ->on('usuario')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favorito', function (Blueprint $table) {
            $table->dropColumns('usuario_id');
        });
    }
}