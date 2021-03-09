<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLightIntencityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('light_intencity', function (Blueprint $table) {
            $table->id();
            $table->integer('light_intencity')->nullable();
            $table->datetime('date')->nullable();
            $table->enum('note',['Normal', 'Dark', 'Bright'])->nullable();
            $table->integer('device_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('light_intencity');
    }
}
