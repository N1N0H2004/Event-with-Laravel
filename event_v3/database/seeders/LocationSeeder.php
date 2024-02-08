<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations= [
            'Gouda',
            'Leiden',
            'Koudekerk aan den Rijn',
            'Alphen aan den Rijn',
            'Leiderdorp',
            'Ter Aar',
            'Katwijk',
            'Noordwijk',
            'Oestgeest',
            'Rijnsburg',
        ];

        foreach ($locations as $locationName) {
            Location::create(['name' => $locationName]);
        }
    }
}
