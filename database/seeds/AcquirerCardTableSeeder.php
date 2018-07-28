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
            ['acquirer' => '1', 'cardBrand' => '1'],
            ['acquirer' => '1', 'cardBrand' => '2'],
            ['acquirer' => '1', 'cardBrand' => '3'],
            ['acquirer' => '1', 'cardBrand' => '4'],
            ['acquirer' => '1', 'cardBrand' => '5'],
            ['acquirer' => '1', 'cardBrand' => '6'],
            ['acquirer' => '1', 'cardBrand' => '7'],
            ['acquirer' => '1', 'cardBrand' => '8'],
            ['acquirer' => '1', 'cardBrand' => '9'],
            ['acquirer' => '1', 'cardBrand' => '10'],
            ['acquirer' => '1', 'cardBrand' => '11'],
            ['acquirer' => '1', 'cardBrand' => '11'],

            ['acquirer' => '2', 'cardBrand' => '1'],
            ['acquirer' => '2', 'cardBrand' => '2'],
            ['acquirer' => '2', 'cardBrand' => '5'],
            ['acquirer' => '2', 'cardBrand' => '6'],
            ['acquirer' => '2', 'cardBrand' => '8'],
            ['acquirer' => '2', 'cardBrand' => '9'],
            ['acquirer' => '2', 'cardBrand' => '10'],
            ['acquirer' => '2', 'cardBrand' => '11'],
            ['acquirer' => '2', 'cardBrand' => '12'],

            ['acquirer' => '3', 'cardBrand' => '1'],
            ['acquirer' => '3', 'cardBrand' => '2'],
            ['acquirer' => '3', 'cardBrand' => '3'],
            ['acquirer' => '3', 'cardBrand' => '4'],
            ['acquirer' => '3', 'cardBrand' => '5'],
            ['acquirer' => '3', 'cardBrand' => '6'],
            ['acquirer' => '3', 'cardBrand' => '8'],
            ['acquirer' => '3', 'cardBrand' => '9'],
            ['acquirer' => '3', 'cardBrand' => '10'],
            ['acquirer' => '3', 'cardBrand' => '11'],
            ['acquirer' => '3', 'cardBrand' => '12'],

            ['acquirer' => '4', 'cardBrand' => '1'],
            ['acquirer' => '4', 'cardBrand' => '2'],
            ['acquirer' => '4', 'cardBrand' => '3'],
            ['acquirer' => '4', 'cardBrand' => '4'],
            ['acquirer' => '4', 'cardBrand' => '5'],
            ['acquirer' => '4', 'cardBrand' => '6'],
            ['acquirer' => '4', 'cardBrand' => '8'],
            ['acquirer' => '4', 'cardBrand' => '9'],
            ['acquirer' => '4', 'cardBrand' => '10'],
            ['acquirer' => '4', 'cardBrand' => '11'],
            ['acquirer' => '4', 'cardBrand' => '12'],

            ['acquirer' => '5', 'cardBrand' => '1'],
            ['acquirer' => '5', 'cardBrand' => '2'],
            ['acquirer' => '5', 'cardBrand' => '3'],
            ['acquirer' => '5', 'cardBrand' => '4'],
            ['acquirer' => '5', 'cardBrand' => '8'],
            ['acquirer' => '5', 'cardBrand' => '9'],
            ['acquirer' => '5', 'cardBrand' => '10'],
            ['acquirer' => '5', 'cardBrand' => '11']
        ];

        DB::table('acquirer_card')->insert($values);
    }
}
