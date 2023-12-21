<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 255);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->dateTime('departure_time')->unsigned();
            $table->dateTime('arrival_time')->unsigned();
            $table->string('train_code', 100);
            $table->tinyInt('cab_number', 20)->unsigned();
            $table->string('punctual_train');
            $table->string('deleted_train');
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
        Schema::dropIfExists('train');
    }
};
