<?php

namespace Tests\Feature;

use App\PaymentMethod;
use Illuminate\Support\Str;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaymentMethodTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/api/paymentMethods');

        $response->assertSuccessful();
    }

    public function testPost()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/paymentMethods', ['id' => '5', 'type' => Str::random(10)]);

        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/paymentMethods/5');

        $response->assertSuccessful();
    }

    public function testPut()
    {
        $data = PaymentMethod::find('5');
        $data->type = Str::random(10);
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', '/api/paymentMethods/edit/' . $data->id, $data->toArray());

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/paymentMethods/delete/5');

        $response
            ->assertSuccessful();
    }
}
