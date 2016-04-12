<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
        
        
        
        // producto_compra
        Schema::create('oferta_producto', function(Blueprint $table){
            $table->increments('id');
            $table->string('cve_producto', 16);
            $table->integer('oferta_id')->unsigned();
            
            $table->foreign('cve_producto')
                ->references('cve_producto')->on('producto')
                ->onDelete('cascade');
            
            $table->foreign('oferta_id')
                ->references('id')->on('oferta')
                ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oferta');
        Schema::drop('oferta_producto');
    }
}
