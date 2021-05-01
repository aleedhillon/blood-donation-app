<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Donor;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    private $cityNames = [
        'Muscat',
        'Bahla',
        'Barka',
        'Sohar',
        'Salalah',
        'Buraimi',
        'Haima',
        'Sure',
        'Ibra',
        'Abri'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->cityNames as $name) {
            City::create([
                'name' => $name
            ]);
        }
    }
}
