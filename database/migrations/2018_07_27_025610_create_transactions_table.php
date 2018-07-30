<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('merchant', 20);
            $table->string('checkoutCode', 10);
            $table->string('cipheredCardNumber', 16);
            $table->integer('amountInCent');
            $table->integer('installments');
            $table->integer('status')->unsigned();
            $table->foreign('status')->references('id')
                ->on('status')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('card_brand')->unsigned();
            $table->foreign('card_brand')->references('id')
                ->on('card_brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('payment_method')->unsigned();
            $table->foreign('payment_method')->references('id')
                ->on('payment_methods')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('acquirer')->unsigned();
            $table->foreign('acquirer')->references('id')
                ->on('acquirers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('acquirerAuthorizationDateTime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
