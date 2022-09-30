<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositeAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposite_amounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Amount')->unsigned();
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
        Schema::dropIfExists('deposite_amounts');
    }
}
