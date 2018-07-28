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
            ['id' => '1', 'cardBrand' => '1', 'paymentMethod' => '3'], //Elo crédito e débito
            ['id' => '2', 'cardBrand' => '1', 'paymentMethod' => '4'], //-> parcelado
            ['id' => '3', 'cardBrand' => '2', 'paymentMethod' => '1'],

            ['id' => '4', 'cardBrand' => '3', 'paymentMethod' => '2'], //Alelo Alim
            ['id' => '5', 'cardBrand' => '4', 'paymentMethod' => '2'], //Alelo Ref
            ['id' => '6', 'cardBrand' => '5', 'paymentMethod' => '2'], //Sodexo Alim
            ['id' => '7', 'cardBrand' => '6', 'paymentMethod' => '2'], //Sodexo Ref

            ['id' => '8', 'cardBrand' => '7', 'paymentMethod' => '3'], //Credz
            ['id' => '9', 'cardBrand' => '7', 'paymentMethod' => '4'], //-> parcelado

            ['id' => '10', 'cardBrand' => '8', 'paymentMethod' => '3'], //Visa e Visa Electron
            ['id' => '11', 'cardBrand' => '8', 'paymentMethod' => '4'], //-> parcelado
            ['id' => '12', 'cardBrand' => '9', 'paymentMethod' => '1'],

            ['id' => '13', 'cardBrand' => '10', 'paymentMethod' => '3'], //Mastercard e Maestro
            ['id' => '14', 'cardBrand' => '10', 'paymentMethod' => '4'], //-> parcelado
            ['id' => '15', 'cardBrand' => '11', 'paymentMethod' => '1'],

            ['id' => '16', 'cardBrand' => '12', 'paymentMethod' => '3'], //Hipercard
            ['id' => '17', 'cardBrand' => '12', 'paymentMethod' => '4'], //-> parcelado
        ];

        DB::table('card_payment')->insert($values);
    }
}
