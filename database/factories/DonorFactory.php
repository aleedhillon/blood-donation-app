<?php

namespace Database\Factories;

use App\Models\Donor;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donor::class;

    protected $bloodTypes = [
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
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'age' => mt_rand(18, 70),
            'bio' => $this->faker->sentence,
            'blood_type' => Arr::random($this->bloodTypes),
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber
        ];
    }
}
