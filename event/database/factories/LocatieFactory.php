<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use App\Models\Locatie;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocatieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
