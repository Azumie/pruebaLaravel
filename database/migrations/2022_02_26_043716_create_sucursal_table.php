<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 10);
            $table->string('descripcion', 100);
            $table->string('rif', 11);
            $table->string('direccion', 191);
            $table->string('correo', 100);
            $table->string('telefono', 100);
            //$table->unsignedInteger('idusuario');
            //$table->foreign('idusuario')->references('id')->on('usuarios');
        });
        DB::table('sucursales')
            ->insert([
                'codigo' => 'HLASDJR24',
                'descripcion' => 'Hola',
                'rif' => 'j-27554995',
                'direccion' => 'Carrera 19',
                'correo' => 'prueba@gmail.com',
                'telefono' => '04125280750',
            ]);
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
}
