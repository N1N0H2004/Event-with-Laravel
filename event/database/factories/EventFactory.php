<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use App\Models\Locatie;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'locatie_id' => Locatie::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'event_date' => $this->faker->date,
            'start_time' => $this->faker->time,
            'end_time' => $this->faker->time,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
