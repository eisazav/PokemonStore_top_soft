<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_item', function (Blueprint $table) {
            $table->id();
            $table->bigInt('box_id')->unsigned();
            $table->bigInt('pokemon_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('box_item', function (Blueprint $table) {
            $table->foreign('box_id')->references('id')->on('box');
            $table->foreign('pokemon_id')->references('id')->on('pokemon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('box_item');
    }
};
