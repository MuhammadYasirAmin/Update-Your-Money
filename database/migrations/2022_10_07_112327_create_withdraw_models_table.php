<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_models', function (Blueprint $table) {
            $table->id();
            $table->string('PaymentSystem');
            $table->string('WalletAddress');
            $table->bigInteger('TotalAmount')->unsigned();
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
        Schema::dropIfExists('withdraw_models');
    }
}
