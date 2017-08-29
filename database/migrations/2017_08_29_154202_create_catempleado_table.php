<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatempleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catempleado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cedula');
            $table->date('fechaingreso');
            $table->date('fechasalida');
            $table->date('fechacumple');
            $table->integer('catestado_id')->unsigned();
            $table->foreign('catestado_id')->references('id')->on('catestado');
            $table->integer('catsucursal_id')->unsigned();
            $table->foreign('catsucursal_id')->references('id')->on('catsucursal');
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
        Schema::dropIfExists('catempleado');
    }
}
