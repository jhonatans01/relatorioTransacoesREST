<?php

use Illuminate\Database\Seeder;

class AcquirerCardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acquirer_card')->delete();

        $values= [
            ['acquirer' => '1', 'card_brand' => '1'],
            ['acquirer' => '1', 'card_brand' => '2'],
            ['acquirer' => '1', 'card_brand' => '3'],
            ['acquirer' => '1', 'card_brand' => '4'],
            ['acquirer' => '1', 'card_brand' => '5'],
            ['acquirer' => '1', 'card_brand' => '6'],
            ['acquirer' => '1', 'card_brand' => '7'],
            ['acquirer' => '1', 'card_brand' => '8'],
            ['acquirer' => '1', 'card_brand' => '9'],
            ['acquirer' => '1', 'card_brand' => '10'],
            ['acquirer' => '1', 'card_brand' => '11'],
            ['acquirer' => '1', 'card_brand' => '12'],

            ['acquirer' => '2', 'card_brand' => '1'],
            ['acquirer' => '2', 'card_brand' => '2'],
            ['acquirer' => '2', 'card_brand' => '5'],
            ['acquirer' => '2', 'card_brand' => '6'],
            ['acquirer' => '2', 'card_brand' => '8'],
            ['acquirer' => '2', 'card_brand' => '9'],
            ['acquirer' => '2', 'card_brand' => '10'],
            ['acquirer' => '2', 'card_brand' => '11'],
            ['acquirer' => '2', 'card_brand' => '12'],

            ['acquirer' => '3', 'card_brand' => '1'],
            ['acquirer' => '3', 'card_brand' => '2'],
            ['acquirer' => '3', 'card_brand' => '3'],
            ['acquirer' => '3', 'card_brand' => '4'],
            ['acquirer' => '3', 'card_brand' => '5'],
            ['acquirer' => '3', 'card_brand' => '6'],
            ['acquirer' => '3', 'card_brand' => '8'],
            ['acquirer' => '3', 'card_brand' => '9'],
            ['acquirer' => '3', 'card_brand' => '10'],
            ['acquirer' => '3', 'card_brand' => '11'],
            ['acquirer' => '3', 'card_brand' => '12'],

            ['acquirer' => '4', 'card_brand' => '1'],
            ['acquirer' => '4', 'card_brand' => '2'],
            ['acquirer' => '4', 'card_brand' => '3'],
            ['acquirer' => '4', 'card_brand' => '4'],
            ['acquirer' => '4', 'card_brand' => '5'],
            ['acquirer' => '4', 'card_brand' => '6'],
            ['acquirer' => '4', 'card_brand' => '8'],
            ['acquirer' => '4', 'card_brand' => '9'],
            ['acquirer' => '4', 'card_brand' => '10'],
            ['acquirer' => '4', 'card_brand' => '11'],
            ['acquirer' => '4', 'card_brand' => '12'],

            ['acquirer' => '5', 'card_brand' => '1'],
            ['acquirer' => '5', 'card_brand' => '2'],
            ['acquirer' => '5', 'card_brand' => '3'],
            ['acquirer' => '5', 'card_brand' => '4'],
            ['acquirer' => '5', 'card_brand' => '8'],
            ['acquirer' => '5', 'card_brand' => '9'],
            ['acquirer' => '5', 'card_brand' => '10'],
            ['acquirer' => '5', 'card_brand' => '11']
        ];

        DB::table('acquirer_card')->insert($values);
    }
}
