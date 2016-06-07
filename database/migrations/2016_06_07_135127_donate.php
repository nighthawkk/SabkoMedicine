<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Donate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('phone');
            $table->string('medicine');
            $table->string('usage');
            $table->bigInteger('quantity');
            $table->string('address');
            $table->string('ngo');




            $table->rememberToken();
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
        Schema::drop('donate');
    }
}
