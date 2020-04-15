<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillBaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_bays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('ptype_id');
            $table->foreign('ptype_id')->references('id')->on('pay_types');
            $table->unsignedbigInteger('bill_id');
            $table->foreign('bill_id')->references('id')->on('bills');
            $table->unsignedbigInteger('date_id');
            $table->foreign('date_id')->references('id')->on('dates');
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
        Schema::dropIfExists('bill_bays');
    }
}
