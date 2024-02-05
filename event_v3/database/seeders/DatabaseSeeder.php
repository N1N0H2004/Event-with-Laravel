<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\User;
use App\Models\Location;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $locations = Location::factory(50)->create();

        $events = Event::factory(50)
                       ->recycle($locations)
                       ->recycle($users)
                       ->create();

        $ninoh = User::factory()
                     ->create([
                         'name' => 'Ninoh van Dijke',
                         'email' => 'ninohvdijke@gmail.com',
                     ]);
    }
}
