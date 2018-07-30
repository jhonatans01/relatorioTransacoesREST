<?php

namespace Tests\Feature;

use App\Merchant;
use Illuminate\Support\Str;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MerchantTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/api/merchants');

        $response->assertSuccessful();
    }

    public function testPost()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/merchants', ['cnpj' => '9429293000101',
            'companyName' => Str::random(10)]);

        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/merchants/9429293000101');

        $response->assertSuccessful();
    }

    public function testPut()
    {
        $data = Merchant::find('9429293000101');
        $data->companyName = Str::random(10);
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', '/api/merchants/edit/' . $data->cnpj, $data->toArray());

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/merchants/delete/9429293000101');

        $response
            ->assertSuccessful();
    }
}
