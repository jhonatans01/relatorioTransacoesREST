<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER createTransaction BEFORE INSERT ON `transactions`
        FOR EACH ROW
        BEGIN
            SET @cardPayMethod := (SELECT id FROM `tef`.`card_payment` WHERE card_brand = NEW.card_brand AND payment_method=NEW.payment_method);
		    SET @cardAcquirer := (SELECT acquirer FROM `tef`.`acquirer_card` WHERE acquirer = NEW.acquirer AND card_brand = NEW.card_brand);
		
            IF (@cardPayMethod IS NULL OR @cardAcquirer IS NULL)
            THEN
                SET NEW.card_brand = NULL;
            END IF;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS `createTransaction`');
    }
}
