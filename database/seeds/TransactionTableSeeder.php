<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();

        $values = [
            ['merchant' => '77404852000179', 'checkoutCode' => '36245',
                'cipheredCardNumber' => '************8082', 'amountInCent' => '1001', 'installments' => '1',
                'status' => '1', 'card_brand' => '2', 'payment_method' => '1',  'acquirer' => '1',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '30481457000126', 'checkoutCode' => '39206',
                'cipheredCardNumber' => '************9077', 'amountInCent' => '3785', 'installments' => '1',
                'status' => '1', 'card_brand' => '6', 'payment_method' => '2', 'acquirer' => '2',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '28176030000172', 'checkoutCode' => '34242',
                'cipheredCardNumber' => '************5015', 'amountInCent' => '936', 'installments' => '1',
                'status' => '1', 'card_brand' => '8', 'payment_method' => '3', 'acquirer' => '3',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '250435000194', 'checkoutCode' => '42490',
                'cipheredCardNumber' => '************3114', 'amountInCent' => '2990', 'installments' => '1',
                'status' => '1', 'card_brand' => '11', 'payment_method' => '1', 'acquirer' => '4',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '8555150000173', 'checkoutCode' => '42490',
                'cipheredCardNumber' => '************7917', 'amountInCent' => '1900', 'installments' => '1',
                'status' => '1', 'card_brand' => '11', 'payment_method' => '1', 'acquirer' => '2',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '685267000160', 'checkoutCode' => '34244',
                'cipheredCardNumber' => '************6054', 'amountInCent' => '1725', 'installments' => '1',
                'status' => '1', 'card_brand' => '10', 'payment_method' => '3',  'acquirer' => '4',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '21442989000163', 'checkoutCode' => '42524',
                'cipheredCardNumber' => '************8010', 'amountInCent' => '2000', 'installments' => '1',
                'status' => '1', 'card_brand' => '4', 'payment_method' => '2', 'acquirer' => '1',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '57971160000871', 'checkoutCode' => '43891',
                'cipheredCardNumber' => '************9107', 'amountInCent' => '7150', 'installments' => '1',
                'status' => '1', 'card_brand' => '11', 'payment_method' => '1', 'acquirer' => '3',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '4404938000128', 'checkoutCode' => '43891',
                'cipheredCardNumber' => '************5012', 'amountInCent' => '11600', 'installments' => '1',
                'status' => '1', 'card_brand' => '11', 'payment_method' => '1', 'acquirer' => '1',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '12698826000155', 'checkoutCode' => '44331',
                'cipheredCardNumber' => '************1139', 'amountInCent' => '1490', 'installments' => '1',
                'status' => '1', 'card_brand' => '9', 'payment_method' => '1', 'acquirer' => '3',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '54044573000146', 'checkoutCode' => '38837',
                'cipheredCardNumber' => '************8233', 'amountInCent' => '3000', 'installments' => '1',
                'status' => '1', 'card_brand' => '9', 'payment_method' => '1', 'acquirer' => '4',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '9429293000100', 'checkoutCode' => '42517',
                'cipheredCardNumber' => '************2834', 'amountInCent' => '3851', 'installments' => '1',
                'status' => '1', 'card_brand' => '8', 'payment_method' => '3', 'acquirer' => '4',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],
            ['merchant' => '10282710000105', 'checkoutCode' => '28865',

                'cipheredCardNumber' => '************8432', 'amountInCent' => '8900', 'installments' => '1',
                'status' => '1', 'card_brand' => '10', 'payment_method' => '4', 'acquirer' => '1',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '22895641000194', 'checkoutCode' => '38687',
                'cipheredCardNumber' => '************7960', 'amountInCent' => '4000', 'installments' => '1',
                'status' => '1', 'card_brand' => '3', 'payment_method' => '2', 'acquirer' => '1',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '15559082000186', 'checkoutCode' => '42517',
                'cipheredCardNumber' => '************1325', 'amountInCent' => '3852', 'installments' => '1',
                'status' => '1', 'card_brand' => '10', 'payment_method' => '4', 'acquirer' => '4',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")],

            ['merchant' => '15593743000351', 'checkoutCode' => '21194',
                'cipheredCardNumber' => '************3301', 'amountInCent' => '12801', 'installments' => '1',
                'status' => '1', 'card_brand' => '1', 'payment_method' => '4', 'acquirer' => '1',
                'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")]
        ];

        DB::table('transactions')->insert($values);
    }
}
