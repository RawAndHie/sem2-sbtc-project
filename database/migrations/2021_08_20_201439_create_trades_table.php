<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id('trade_id');
            $table->bigInteger('account_id')->unsigned();;
            $table->bigInteger('category_id')->unsigned();;
            $table->string('title');
            $table->string('content');
            $table->string('image');
            $table->string('address');
            $table->integer('status_trade');
            $table->foreign('account_id')->references('account_id')->on('account_clients');
            $table->foreign('category_id')->references('category_id')->on('categories');
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
        Schema::dropIfExists('trades');
    }
}
