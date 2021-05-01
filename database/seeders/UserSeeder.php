<?php

namespace Database\Seeders;

use App\Models\Shoutout;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(10)
            ->has(Shoutout::factory()->count(5), 'shoutouts')
            ->create();
    }
}
