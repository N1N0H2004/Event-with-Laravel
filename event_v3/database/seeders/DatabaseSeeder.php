<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users
        User::factory(10)->create();

        // Seed locations
        $this->call(LocationSeeder::class);

        // Seed events
        $this->call(EventSeeder::class);

        // Optionally, seed a specific user
        $ninoh = User::factory()->create([
            'name' => 'Ninoh van Dijke',
            'email' => 'ninohvdijke@gmail.com',
        ]);
    }
}
