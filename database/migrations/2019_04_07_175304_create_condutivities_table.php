<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondutivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condutivities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('leitura');
            $table->string('sensor_topic');
            $table->timestamps();

            $table->foreign('sensor_topic')->references('topic')->on('sensors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condutivities');
    }
}
