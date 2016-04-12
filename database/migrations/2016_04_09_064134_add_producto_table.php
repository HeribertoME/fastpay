<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->string('cve_producto', 16)->primary();
            $table->string('nombre', 60);
            $table->double('precio', 9, 2);
            $table->string('marca', 30);
            $table->string('contenido_neto', 30);
            $table->string('categoria', 20);
            $table->string('imagen', 100);
            $table->string('caducidad', 30);
            $table->string('descripcion', 100);

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
        Schema::drop('producto');
    }
}