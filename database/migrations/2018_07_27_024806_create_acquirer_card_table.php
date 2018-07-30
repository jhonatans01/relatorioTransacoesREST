<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcquirerCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquirer_card', function (Blueprint $table) {
            $table->integer('acquirer')->unsigned();
            $table->foreign('acquirer')->references('id')
                ->on('acquirers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('card_brand')->unsigned();
            $table->foreign('card_brand')->references('id')
                ->on('card_brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->primary(['acquirer', 'card_brand']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acquirer_card');
    }
}
