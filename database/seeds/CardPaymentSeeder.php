<?php

use Illuminate\Database\Seeder;

class CardPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_payment')->delete();

        $values = [
            ['id' => '1', 'card_brand' => '1', 'payment_method' => '3'], //Elo crédito e débito
            ['id' => '2', 'card_brand' => '1', 'payment_method' => '4'], //-> parcelado
            ['id' => '3', 'card_brand' => '2', 'payment_method' => '1'],

            ['id' => '4', 'card_brand' => '3', 'payment_method' => '2'], //Alelo Alim
            ['id' => '5', 'card_brand' => '4', 'payment_method' => '2'], //Alelo Ref
            ['id' => '6', 'card_brand' => '5', 'payment_method' => '2'], //Sodexo Alim
            ['id' => '7', 'card_brand' => '6', 'payment_method' => '2'], //Sodexo Ref

            ['id' => '8', 'card_brand' => '7', 'payment_method' => '3'], //Credz
            ['id' => '9', 'card_brand' => '7', 'payment_method' => '4'], //-> parcelado

            ['id' => '10', 'card_brand' => '8', 'payment_method' => '3'], //Visa e Visa Electron
            ['id' => '11', 'card_brand' => '8', 'payment_method' => '4'], //-> parcelado
            ['id' => '12', 'card_brand' => '9', 'payment_method' => '1'],

            ['id' => '13', 'card_brand' => '10', 'payment_method' => '3'], //Mastercard e Maestro
            ['id' => '14', 'card_brand' => '10', 'payment_method' => '4'], //-> parcelado
            ['id' => '15', 'card_brand' => '11', 'payment_method' => '1'],

            ['id' => '16', 'card_brand' => '12', 'payment_method' => '3'], //Hipercard
            ['id' => '17', 'card_brand' => '12', 'payment_method' => '4'], //-> parcelado
        ];

        DB::table('card_payment')->insert($values);
    }
}
