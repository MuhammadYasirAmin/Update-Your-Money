<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_logs', function (Blueprint $table) {
            $table->id();
            $table->string('PaymentMethod');
            $table->string('TransactionType');
            $table->bigInteger('Amount')->unsigned();
            $table->bigInteger('UID')->unsigned();
            $table->string('Description');
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
        Schema::dropIfExists('financial_logs');
    }
}
