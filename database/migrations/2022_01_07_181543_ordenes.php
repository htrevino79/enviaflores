<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ordenes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('producto')->unsigned();
            $table->bigInteger('proveedor')->unsigned();
            $table->timestamps();
            $table->foreign('producto')->references('id')->on('productos');
            $table->foreign('proveedor')->references('id')->on('proveedores');
        });

        
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('ordenes');
    }
}
