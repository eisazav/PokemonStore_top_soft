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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('type');
            $table->string('weakness');
            $table->string('ablity');
            $table->double('height');
            $table->double('weight');
            $table->string('description');
            $table->double('cost');
            $table->boolean('evolution');
            $table->bigInteger('evolutionId')->nullable();
            $table->integer('stat_hp');
            $table->integer('stat_attack');
            $table->integer('stat_defense');
            $table->integer('stat_special_attack');
            $table->integer('stat_special_defense');
            $table->integer('stat_speed');
            $table->boolean('of_the_month');
        });

        #Schema::table('pokemon', function (Blueprint $table) {
            #$table->foreign('evolutionId')->references('id')->on('pokemon');
        #});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
};
