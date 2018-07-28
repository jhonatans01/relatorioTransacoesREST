<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AcquirerTableSeeder::class);
        $this->call(CardBrandTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(MerchantTableSeeder::class);
        $this->call(CardPaymentSeeder::class);
        $this->call(AcquirerCardTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
    }
}
