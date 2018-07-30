<?php

namespace Tests\Feature;

use App\CardBrand;
use Illuminate\Support\Str;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CardBrandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/api/cardBrands');

        $response->assertSuccessful();
    }

    public function testPost()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/cardBrands', ['id' => '13', 'name' => Str::random(10)]);

        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/cardBrands/13');

        $response->assertSuccessful();
    }

    public function testPut()
    {
        $data = CardBrand::find('13');
        $data->name = Str::random(10);
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', '/api/cardBrands/edit/' . $data->id, $data->toArray());

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/cardBrands/delete/13');

        $response
            ->assertSuccessful();
    }
}
