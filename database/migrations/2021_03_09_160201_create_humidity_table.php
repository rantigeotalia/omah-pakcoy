<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumidityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humidity', function (Blueprint $table) {
            $table->id();
            $table->integer('humidity')->nullable();
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
        Schema::dropIfExists('humidity');
    }
}
