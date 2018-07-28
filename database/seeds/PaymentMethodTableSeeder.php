<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->delete();

        $values = [
            ['id' => '1', 'type' => 'Débito à Vista'],
            ['id' => '2', 'type' => 'Voucher'],
            ['id' => '3', 'type' => 'Crédito à Vista'],
            ['id' => '4', 'type' => 'Crédito Parcelado Loja']
        ];

        DB::table('payment_methods')->insert($values);
    }
}
