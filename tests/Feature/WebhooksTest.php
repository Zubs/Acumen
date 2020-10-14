<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebhooksTest extends TestCase
{
    public function testAddWebhook()
    {
        $response = $this->get('/api/forecasts/2');

        $response->assertStatus(200);
    }

    public function testDeleteWebhook()
    {
        $response = $this->get('/api/forecasts/2');

        $response->assertStatus(200);
    }
}
