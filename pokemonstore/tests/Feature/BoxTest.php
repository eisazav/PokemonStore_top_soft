<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Box;
use Tests\TestCase;

class BoxTest extends TestCase
{
    public function test_api_box_get_all() {
        $response = $this->get('/api/box');
        $response->assertStatus(200);
    }
    public function test_api_box_get_by_id() {
        $box = Box::factory()->create();
        $response = $this->get('/api/box/' . $box->getId());
        $response->assertStatus(200);
    }
}
