<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario',80);
            $table->string('password',80);
            $table->enum('status',['activo','baneado'])->default('activo');
            $table->integer('encuestadora_id')->unsigned();
            $table->foreign('encuestadora_id')->references('id')->on('encuestadoras')->onUpdate('cascade');
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas')->onUpdate('cascade');
            $table->integer('ciudad_id')->unsigned();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onUpdate('cascade');
            $table->text('direccion');
            $table->string('codigopostal',10);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
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
        Schema::dropIfExists('cuentas');
    }
}
