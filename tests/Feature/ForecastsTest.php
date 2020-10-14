<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForecastsTest extends TestCase
{
    public function testGetForecast()
    {
        $response = $this->get('/api/forecasts/2');

        $response->assertStatus(200);
    }
}
