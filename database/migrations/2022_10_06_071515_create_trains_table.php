<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->char('company', 150);
            $table->char('departure_station', 255);
            $table->char('arrival_station', 255);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->char('code', 5);
            $table->unsignedTinyInteger('coach_number');
            $table->boolean('on_time');
            $table->boolean('cancelled');
            $table->id();
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
}
