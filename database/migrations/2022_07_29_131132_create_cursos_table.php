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
    //con up se crea la tabla
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();//llave primaria
            $table->timestamps();//registra el tiempo de la creacion de la tabla
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('duracion');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //con down se borra la tabla
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
