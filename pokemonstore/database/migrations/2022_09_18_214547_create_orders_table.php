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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Aceptada');
            $table->date('dateOrder');
            $table->date('dateDelivery');
            $table->integer('total');
            $table->string('paymentMethod')->default('Efectivo');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'fk_orders_users')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
};
