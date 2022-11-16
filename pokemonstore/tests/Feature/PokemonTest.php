<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Pokemon;
use Tests\TestCase;

class PokemonTest extends TestCase
{
    public function test_api_pokemon_get_all() {
        $response = $this->get('/api/pokemon');
        $response->assertStatus(200);
    }
    public function test_api_pokemon_get_by_id() {
        $pokemon = Pokemon::factory()->create();
        $response = $this->get('/api/pokemon/' . $pokemon->getId());
        $response->assertStatus(200);
    }
}
