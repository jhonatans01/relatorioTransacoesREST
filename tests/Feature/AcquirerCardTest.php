<?php

namespace Tests\Feature;

use App\Acquirer;
use App\AcquirerCard;
use App\CardBrand;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AcquirerCardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/api/acquirerCards');

        $response->assertSuccessful();
    }

    public function testPost()
    {
        $cardBrand = CardBrand::where('name', 'Credz')->first();
        $acquirer = Acquirer::where('name', 'Bin')->first();

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/acquirerCards', ['card_brand' => $cardBrand,
            'acquirer' => $acquirer]);

        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/acquirerCards/1/1');

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $cardBrand = CardBrand::where('name', 'Credz')->first();
        $acquirer = Acquirer::where('name', 'Bin')->first();

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/acquirerCards/delete/'.$acquirer->id.'/'.$cardBrand->id);

        $response
            ->assertSuccessful();
    }
}
