<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcquirerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acquirers')->delete();

        $values= [
            ['id' => '1', 'name' => 'Cielo'],
            ['id' => '2', 'name' => 'Redecard'],
            ['id' => '3', 'name' => 'Stone'],
            ['id' => '4', 'name' => 'Getnet'],
            ['id' => '5', 'name' => 'Bin'],
        ];

        DB::table('acquirers')->insert($values);
    }
}
