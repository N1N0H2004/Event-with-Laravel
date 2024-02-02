<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Locatie;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $users = User::factory(10)->create();
         $locations = Locatie::factory(10)->create();

         $events = Event::factory(50)
                        ->recycle($locations)
                        ->recycle($users)
                        ->create();


//         $ninoh = User::factory()
//                                ->has(Event::factory(50))
//                                ->has(Locatie::factory(50)->recycle($events))
//                                ->create([
//                                    'name' => 'Ninoh van Dijke',
//                                    'email' => 'ninohvdijke@gmail.com',
//         ]);
    }
}

