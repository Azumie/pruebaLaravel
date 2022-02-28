<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('activo')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('idsucursal')->default(0);
            $table->foreign('idsucursal')->references('id')->on('sucursals');
        });
        DB::table('users')
            ->insert([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('root1234'),
                'idsucursal' => 1,
                'created_at' => '2022-02-27 18:25:29.000',
                'updated_at' => '2022-02-27 18:25:29.000'
            ]);

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //2014_10_12_000000_create_users_table.php

}
