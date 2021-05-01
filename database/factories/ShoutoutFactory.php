<?php

namespace Database\Factories;

use App\Models\Shoutout;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShoutoutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shoutout::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blood_type_id' => mt_rand(1, 8),
            'city_id' => mt_rand(1, 10),
            'description' => $this->faker->sentence,
            'phone' => $this->faker->phoneNumber,
            'specific_address' => $this->faker->address
        ];
    }
}
