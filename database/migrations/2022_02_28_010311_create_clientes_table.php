<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 10);
            $table->string('nombre', 50);
            $table->string('rif', 11);
            $table->string('direccion', 200);
            $table->string('telefono', 10);
            $table->string('email', 100);
            $table->boolean('activo')->default(true);
            $table->timestamps();
            $table->unsignedInteger('idsucursal')->default(0);
            $table->foreign('idsucursal')->references('id')->on('sucursals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
