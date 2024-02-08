<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event1 = Event::create([
            'user_id' => 1,
            'title' => 'The',
            'location_id' => 1,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event2 = Event::create([
            'user_id' => 1,
            'title' => 'Event',
            'location_id' => 2,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event3 = Event::create([
            'user_id' => 1,
            'title' => 'Holder',
            'location_id' => 3,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event4 = Event::create([
            'user_id' => 1,
            'title' => 'You',
            'location_id' => 4,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event5 = Event::create([
            'user_id' => 1,
            'title' => 'Need',
            'location_id' => 5,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event6 = Event::create([
            'user_id' => 1,
            'title' => 'In',
            'location_id' => 6,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event7 = Event::create([
            'user_id' => 1,
            'title' => 'your',
            'location_id' => 7,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event8 = Event::create([
            'user_id' => 1,
            'title' => 'Life',
            'location_id' => 8,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event9 = Event::create([
            'user_id' => 1,
            'title' => 'Very',
            'location_id' => 9,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $event10 = Event::create([
            'user_id' => 1,
            'title' => 'Important',
            'location_id' => 10,
            'description' => 'Get ready for an extraordinary model train exhibition featuring stunning displays and interactive shows for enthusiasts.',
            'event_date' => '2024-01-01',
            'start_time' => '12:05:00',
            'end_time' => '13:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
