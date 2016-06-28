<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('shoes', function($table) {
                // default required columns
                $table->increments('id');
                $table->timestamps();
                // specific table columns
                $table->string('name');
                $table->text('description');
                $table->decimal('price', 5, 2);
                // linking relationships
                $table->integer('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('categories');
                $table->integer('color_id')->unsigned();
                $table->foreign('color_id')->references('id')->on('colors');
                $table->integer('genre_id')->unsigned();
                $table->foreign('genre_id')->references('id')->on('genres');
                $table->integer('size_id')->unsigned();
                $table->foreign('size_id')->references('id')->on('sizes');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shoes');
    }
}
