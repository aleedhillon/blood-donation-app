<?php

namespace Database\Seeders;

use App\Models\BloodType;
use Illuminate\Database\Seeder;

class BloodTypeSeeder extends Seeder
{
    public $bloodTypes = [
        'A+',
        'A-',
        'B+',
        'B-',
        'O+',
        'O-',
        'AB+',
        'AB-'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->bloodTypes as $bloodType) {
            BloodType::create([
                'name' => $bloodType
            ]);
        }
    }
}
