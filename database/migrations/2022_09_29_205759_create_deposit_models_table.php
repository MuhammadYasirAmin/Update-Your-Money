<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_models', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('investAmount')->unsigned();
            $table->string('PlanSelected');
            $table->string('selectedCurrency');
            $table->bigInteger('TotalProfit')->unsigned();
            $table->bigInteger('TotalPercent')->unsigned();
            $table->bigInteger('UID')->unsigned();
            $table->timestamps();

            $table->foreign('UID')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposit_models');
    }
}
