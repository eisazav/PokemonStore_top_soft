<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Pokemon;

class PokemonTest extends TestCase
{
    public function test_pokemon_model_exists() {
        $pokemon = new Pokemon();
        $this->assertTrue($pokemon instanceof Pokemon);
    }
}
