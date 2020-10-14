<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CitiesTest extends TestCase
{
    public function testAddCity()
    {
        $response = $this->postJson('/api/cities', [
            'name' => 'Ondo',
            'latitude' => 27,
            'longitude' => 58,
        ]);

        $response->assertStatus(201);
    }

    public function testUpdateCity()
    {
        $response = $this->patchJson('/api/cities/2', [
            'name' => 'Tokyo',
            'latitude' => 24,
            'longitude' => 72,
        ]);

        $response->assertStatus(200);
    }

    public function testDeleteCity()
    {
        $response = $this->deleteJson('/api/cities/2');

        $response->assertStatus(200);
    }
}
