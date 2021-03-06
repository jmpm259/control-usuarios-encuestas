<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip',15);
            $table->enum('status',['buena','reportada'])->default('buena');
            $table->timestamps();
        });

        Schema::create('cuenta_ip', function (Blueprint $table){
            $table->increments('id');
            $table->integer('cuenta_id')->unsigned();
            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('ip_id')->unsigned();
            $table->foreign('ip_id')->references('id')->on('ip')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cuenta_ip');
        Schema::dropIfExists('ip');
    }
}
