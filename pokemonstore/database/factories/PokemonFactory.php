<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'type' => fake()->text(),
            'weakness' => fake()->text(),
            'ablity' => fake()->text(),
            'height' => fake()->randomNumber(2),
            'weight' => fake()->randomNumber(2),
            'description' => fake()->text(),
            'cost' => fake()->randomNumber(2),
            'evolution'  => fake()->boolean(),
            'stat_hp' => fake()->randomNumber(2),
            'stat_attack' => fake()->randomNumber(2),
            'stat_defense' => fake()->randomNumber(2),
            'stat_special_attack' => fake()->randomNumber(2),
            'stat_special_defense' => fake()->randomNumber(2),
            'stat_speed' => fake()->randomNumber(2),
            'of_the_month' => fake()->boolean(),
            'image' => fake()->imageUrl(),
        ];
    }
}
