<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Donor;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::factory()
            ->count(10)
            ->has(Donor::factory()->count(10), 'donors')
            ->create();
    }
}
