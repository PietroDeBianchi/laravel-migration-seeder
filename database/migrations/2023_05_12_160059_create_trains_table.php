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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Company", 30);
            $table->string("Departures_station", 40);
            $table->string("Arrivals_station", 40);
            $table->time("Departures_time");
            $table->time("Arrivals_time");
            $table->string("Train_code", 8);
            $table->unsignedTinyInteger("Wagon_numbers");
            $table->time("Time_lag")->nullable();
            $table->boolean("Deleted");
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
        Schema::dropIfExists('trains');
    }
};
