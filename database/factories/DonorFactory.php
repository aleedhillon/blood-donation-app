<?php

namespace Database\Factories;

use App\Models\Donor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'blood_type_id' => mt_rand(1, 8),
            'city_id' => mt_rand(1, 10),
            'age' => mt_rand(18, 70),
            'bio' => $this->faker->realText(40),
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->e164PhoneNumber
        ];
    }
}
