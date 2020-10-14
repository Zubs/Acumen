<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemperatureTest extends TestCase
{
    public function testAddTemperature()
    {
        $response = $this->postJson('/api/temperature/', [
            'min' => 27,
            'max' => 42,
            'cities_id' => 3,
        ]);

        $response->assertStatus(201);
    }
}
