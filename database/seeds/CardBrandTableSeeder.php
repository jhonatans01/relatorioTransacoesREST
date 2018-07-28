<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_brands')->delete();

        $values = [
            ['id' => '1', 'name' => 'Elo Crédito'],
            ['id' => '2', 'name' => 'Elo Débito'],
            ['id' => '3', 'name' => 'Alelo Alimentação'],
            ['id' => '4', 'name' => 'Alelo Refeição'],
            ['id' => '5', 'name' => 'Sodexo Alimentação'],
            ['id' => '6', 'name' => 'Sodexo Refeição'],
            ['id' => '7', 'name' => 'Credz'],
            ['id' => '8', 'name' => 'Visa'],
            ['id' => '9', 'name' => 'Visa Electron'],
            ['id' => '10', 'name' => 'Mastercard'],
            ['id' => '11', 'name' => 'Maestro'],
            ['id' => '12', 'name' => 'Hipercard']
        ];

        DB::table('card_brands')->insert($values);
    }
}
