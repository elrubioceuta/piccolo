<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('books', function($table) {
                // default required columns
                $table->increments('id');
                $table->timestamps();
                // specific table columns
                $table->text('details');
                // linking relationships
                $table->integer('shoe_id')->unsigned();
                $table->foreign('shoe_id')->references('id')->on('shoes');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
