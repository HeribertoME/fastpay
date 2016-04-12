<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCuentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta', function (Blueprint $table) {
            $table->increments('cve_cuenta');
            $table->string('nombre', 30);
            $table->string('ap_paterno', 30);
            $table->string('ap_materno', 30);
            $table->integer('edad');
            $table->string('direccion', 60);
            $table->string('tel_cel', 10);
            $table->string('foto', 100);
            $table->string('user', 30)->unique();
            $table->string('pass');
            $table->enum('type', ['member', 'admin']);


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
        Schema::drop('cuenta');
    }
}