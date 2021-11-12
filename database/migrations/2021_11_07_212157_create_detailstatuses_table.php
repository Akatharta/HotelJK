<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailstatuses', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->date('fechaingreso');
            $table->date('fechasalida');

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
        Schema::dropIfExists('detailstatuses');
    }
}
