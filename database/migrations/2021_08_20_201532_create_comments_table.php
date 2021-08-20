<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->bigInteger('trade_id')->unsigned();;
            $table->bigInteger('account_id')->unsigned();;
            $table->text('content');
            $table->foreign('trade_id')->references('trade_id')->on('trades');
            $table->foreign('account_id')->references('account_id')->on('account_clients');
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
        Schema::dropIfExists('comments');
    }
}
