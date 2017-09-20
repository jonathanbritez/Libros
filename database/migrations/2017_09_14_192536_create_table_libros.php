<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precio',4,2);
            $table->string('isbn',20);
            $table->string('nombre',20);
            $table->string('autor',20);
            $table->string('editorial',20);
            $table->string('genero');
            $table->string('tipo');
            $table->date('fecha_emision');
            $table->integer('id_proveedores')-> unsigned() ;
            $table->foreign('id_proveedores')->references('id')-> on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
