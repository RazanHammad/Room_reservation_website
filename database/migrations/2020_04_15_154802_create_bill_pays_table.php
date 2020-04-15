<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_pays', function (Blueprint $table) {
            $table->bigIncrements('bid');
            //$table->integer('btype_id')->unsigned();
            //$table->foreign('ptype_id')->reference('Pid')->on('pay_types');
            //$table->integer('date_id')->unsigned();
            //$table->foreign('date_id')->reference('id')->on('dates');
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
        Schema::dropIfExists('bill_pays');
    }
}
