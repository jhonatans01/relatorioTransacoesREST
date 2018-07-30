<?php

namespace Tests\Feature;

use App\Status;
use Illuminate\Support\Str;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatusTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/api/status');

        $response->assertSuccessful();
    }

    public function testPost()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/status', ['id' => '9', 'statusText' => 'Recusada',
            'statusInfo' => Str::random(10)]);

        $response
            ->assertSuccessful();
    }

    public function testGetSingle()
    {
        $response = $this->get('/api/status/9');

        $response->assertSuccessful();
    }

    public function testPut()
    {
        $data = Status::find('9');
        $data->statusInfo = Str::random(10);
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', '/api/status/edit/' . $data->id, $data->toArray());

        $response->assertSuccessful();
    }

    public function testDelete()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', '/api/status/delete/9');

        $response
            ->assertSuccessful();
    }
}
