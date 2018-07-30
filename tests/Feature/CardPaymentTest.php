<?php

namespace Tests\Feature;

use App\CardBrand;
use App\CardPayment;
use App\PaymentMethod;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CardPaymentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/api/cardPayments');

        $response->assertSuccessful();
    }

    public function testPost()
    {
        $cardBrand = CardBrand::where('name', 'Credz')->first();
        $paymentMethod = PaymentMethod::where('type', 'Débito à Vista')->first();

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/cardPayments', ['id' => '18', 'card_brand' => $cardBrand,
            'payment_method' => $paymentMethod]);

        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/cardPayments/18');

        $response->assertSuccessful();
    }

    public function testPut()
    {
        $cardBrand = CardBrand::where('name', 'Hipercard')->first();

        $data = CardPayment::find('18');
        $data->cardBrand = $cardBrand;

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', '/api/cardPayments/edit/' . $data->id, $data->toArray());

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/cardPayments/delete/18');

        $response
            ->assertSuccessful();
    }
}
