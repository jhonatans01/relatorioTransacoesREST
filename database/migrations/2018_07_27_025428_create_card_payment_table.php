<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cardBrand')->unsigned();
            $table->foreign('cardBrand')->references('id')
                ->on('card_brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('paymentMethod')->unsigned();
            $table->foreign('paymentMethod')->references('id')
                ->on('payment_methods')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_payment');
    }
}
