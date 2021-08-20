<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeRequestIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_request_ids', function (Blueprint $table) {
            $table->id('trade_request_id');
            $table->bigInteger('trade_id')->unsigned();;
            $table->bigInteger('request_id')->unsigned();;
            $table->integer('status');
            $table->foreign('trade_id')->references('trade_id')->on('trades');
            $table->foreign('request_id')->references('request_id')->on('trade_requests');
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
        Schema::dropIfExists('trade_request_ids');
    }
}
