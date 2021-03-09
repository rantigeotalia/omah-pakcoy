<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoilMoistureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soil_moisture', function (Blueprint $table) {
            $table->id();
            $table->integer('soil_moisture')->nullable();
            $table->datetime('date')->nullable();
            $table->enum('note',['Normal', 'Wet', 'Dry'])->nullable();
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
        Schema::dropIfExists('soil_moisture');
    }
}
