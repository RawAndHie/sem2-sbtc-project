<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_clients', function (Blueprint $table) {
            $table->id('account_id');
            $table->string('username');
            $table->string('password');
            $table->string('gmail');
            $table->integer('gender');
            $table->string('full_name');
            $table->string('phone');
            $table->string('image_avatar');
            $table->string('image_id_1');
            $table->string('image_id_2');
            $table->string('id_number');
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
        Schema::dropIfExists('account_clients');
    }
}
