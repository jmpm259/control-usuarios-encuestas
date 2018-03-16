<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestadoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('encuestadora',50);            
            $table->timestamps();
        });

        Schema::create('encuestadora_pais', function (Blueprint $table){
            $table->increments('id');
            $table->integer('encuestadora_id')->unsigned();
            $table->foreign('encuestadora_id')->references('id')->on('encuestadoras')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('paises')->onUpdate('cascade')->onDelete('cascade');
            $table->string('cobro',10);
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
        Schema::dropIfExists('encuestadora_pais');
        Schema::dropIfExists('encuestadoras');
    }
}
