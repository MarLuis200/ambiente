<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->date('fecha_creacion');
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_persona');
            $table->String('contenido');
            $table->string('img');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_tipo')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
};
