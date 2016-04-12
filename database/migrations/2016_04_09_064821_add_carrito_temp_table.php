<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCarritoTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_temp', function (Blueprint $table) {
            $table->increments('id_carrito');
            $table->string('cantidad', 3);

            $table->string('cve_producto', 16);
            $table->integer('cve_cuenta')->unsigned();

            $table->foreign('cve_producto')
                ->references('cve_producto')->on('producto')
                ->onDelete('cascade');

            $table->foreign('cve_cuenta')
                ->references('cve_cuenta')->on('cuenta')
                ->onDelete('cascade');

            
            
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
        Schema::drop('carrito_temp');
    }
}