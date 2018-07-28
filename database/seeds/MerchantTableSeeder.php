<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Str;

class MerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchants')->delete();

        $merchants = [
            ['cnpj' => '77404852000179', 'companyName' => Str::random(10)],
            ['cnpj' => '30481457000126', 'companyName' => Str::random(10)],
            ['cnpj' => '28176030000172', 'companyName' => Str::random(10)],
            ['cnpj' => '250435000194', 'companyName' => Str::random(10)],
            ['cnpj' => '8555150000173', 'companyName' => Str::random(10)],
            ['cnpj' => '685267000160', 'companyName' => Str::random(10)],
            ['cnpj' => '21442989000163', 'companyName' => Str::random(10)],
            ['cnpj' => '57971160000871', 'companyName' => Str::random(10)],
            ['cnpj' => '4404938000128', 'companyName' => Str::random(10)],
            ['cnpj' => '12698826000155', 'companyName' => Str::random(10)],
            ['cnpj' => '54044573000146', 'companyName' => Str::random(10)],
            ['cnpj' => '9429293000100', 'companyName' => Str::random(10)],
            ['cnpj' => '10282710000105', 'companyName' => Str::random(10)],
            ['cnpj' => '22895641000194', 'companyName' => Str::random(10)],
            ['cnpj' => '15559082000186', 'companyName' => Str::random(10)],
            ['cnpj' => '15593743000351', 'companyName' => Str::random(10)]
        ];

        DB::table('merchants')->insert($merchants);
    }
}
