<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subscription' => 'al',
            'description' =>  'If You try To Fail and Succeed have you failed or succeeded',
            'price' => fake()->randomDigit,
           'features' => 'Web Development , Mobile app Developement, Proof Read',
          
        ];
    }
}


