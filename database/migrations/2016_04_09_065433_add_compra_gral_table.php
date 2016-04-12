<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompraGralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_gral', function (Blueprint $table) {
            $table->increments('id_cg');
            $table->string('nombre_list', 20);
            $table->date('fecha_c');
            $table->string('forma_pago', 20);
            $table->double('iva', 9, 2);
            $table->double('subtotal', 9, 2);
            $table->double('total', 9, 2);

            $table->integer('cve_cuenta')->unsigned();

            $table->foreign('cve_cuenta')
                ->references('cve_cuenta')->on('cuenta')
                ->onDelete('cascade');

            $table->timestamps();
        });


        // pivot producto_compra
        Schema::create('detalle_comp', function(Blueprint $table){
            $table->increments('id');
            $table->integer('cantidad');

            $table->integer('id_cg')->unsigned();
            $table->string('cve_producto', 16);

            $table->foreign('id_cg')
                ->references('id_cg')->on('compra_gral')
                ->onDelete('cascade');
            $table->foreign('cve_producto')
                ->references('cve_producto')->on('producto')
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
        Schema::drop('compra_gral');
        Schema::drop('detalle_comp');
    }
}

