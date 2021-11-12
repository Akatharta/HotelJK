<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailrooms', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');

            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id')->on('reservations');

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
        Schema::dropIfExists('detailrooms');
    }
}
