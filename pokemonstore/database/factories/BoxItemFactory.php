<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Box;
use App\Models\Pokemon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BoxItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'box_id' => function () {
                return Box::all()->random();
            },
            'pokemon_id' => function () {
                return Pokemon::all()->random();
            },
        ];
    }
}
