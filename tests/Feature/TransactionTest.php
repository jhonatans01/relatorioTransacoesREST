<?php

namespace Tests\Feature;

use App\Acquirer;
use App\CardBrand;
use App\Merchant;
use App\PaymentMethod;
use App\Status;
use App\Transaction;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransactionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testGetAll()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('GET', '/api/transactions');

        $response
            ->assertSuccessful();
    }

    public function testGetSpecs()
    {
        $acquirers = Acquirer::all();
        $cardBrands = CardBrand::all();
        $merchant = Merchant::all()->first();

        $data = ['acquirers' => [$acquirers[0], $acquirers[1]],
            'card_brands' => [$cardBrands[0], $cardBrands[1]],
            'merchants' => [$merchant],
            'dates' => ['2018-07-01', '2018-07-28']
        ];

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('GET', '/api/transactions?data=' . json_encode($data));

        $response
            ->assertSuccessful();
    }

    public function testPost()
    {
        $transaction = new Transaction(['id' => '17', 'checkoutCode' => '2345',
            'cipheredCardNumber' => '************6421', 'amountInCent' => '145',
            'installments' => '1', 'acquirerAuthorizationDateTime' => date("Y-m-d H:i:s")]);
        $transaction->status = Status::find('1');
        $transaction->acquirer = Acquirer::all()->first();
        $transaction->card_brand = $transaction->acquirer->cardBrands()->first();
        $transaction->payment_method = $transaction->card_brand->paymentMethods()->first();
        $transaction->merchant = Merchant::all()->first();
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/transactions', $transaction->toArray());
        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/transactions/17');

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $data = Transaction::find('17');
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/transactions/delete/' . $data->id);

        $response->assertSuccessful();
    }
}
