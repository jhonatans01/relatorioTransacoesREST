<?php

namespace Tests\Feature;

use App\Acquirer;
use Illuminate\Support\Str;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AcquirerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/api/acquirers');

        $response->assertSuccessful();
    }

    public function testPost()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/acquirers', ['id' => '6', 'name' => Str::random(10)]);

        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/acquirers/6');

        $response->assertSuccessful();
    }

    public function testPut()
    {
        $data = Acquirer::find('6');
        $data->name = Str::random(10);
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', '/api/acquirers/edit/' . $data->id, $data->toArray());

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/acquirers/delete/6');

        $response
            ->assertSuccessful();
    }
}
