<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
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
            'location_id' => Location::factory(),
            'title' => $this->faker->realText(11),
            'description' => $this->faker->paragraph,
            'event_date' => $this->faker->date,
            'start_time' => $this->faker->time,
            'end_time' => $this->faker->time,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
