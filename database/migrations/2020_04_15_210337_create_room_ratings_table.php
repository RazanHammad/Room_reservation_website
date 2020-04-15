<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Room_id');
            $table->foreign('Room_id')->references('id')->on('rooms');
            $table->unsignedBigInteger('Rating_id');
            $table->foreign('Rating_id')->references('id')->on('ratings');
            $table->string('From_date');//fk
            $table->string('To_date');//fk
            $table->boolean('Is_Active');
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
        Schema::dropIfExists('room_ratings');
    }
}
