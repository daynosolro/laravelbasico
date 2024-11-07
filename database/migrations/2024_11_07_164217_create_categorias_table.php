<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id_categoria');
            $table->string('nombre');
            $table->timestamps();
    
            // Asegúrate de que la tabla use InnoDB
            $table->engine = 'InnoDB';
        });
    }
    
    
  
};
