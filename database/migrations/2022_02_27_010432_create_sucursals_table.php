<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 10);
            $table->string('descripcion', 100);
            $table->string('rif', 11);
            $table->string('direccion', 191);
            $table->string('correo', 100);
            $table->string('telefono', 100);
            $table->boolean('activo')->default(true);
            $table->timestamps();
            //$table->unsignedInteger('idusuario');
            //$table->foreign('idusuario')->references('id')->on('usuarios');
        });
        DB::table('sucursals')
            ->insert([
                'codigo' => 'S001',
                'descripcion' => 'Sucursal principal',
                'rif' => 'j-27554995',
                'direccion' => 'Av Venezuela',
                'correo' => 'prueba@gmail.com',
                'telefono' => '04125280750',
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursals');
    }
}
