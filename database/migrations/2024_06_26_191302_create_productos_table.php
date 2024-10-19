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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fecha_caducidad'); // Este campo es opcional para blogs y proyectos
            $table->unsignedBigInteger('id_tipo'); // Relación con la tabla de tipos
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            $table->string('img');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_tipo')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
