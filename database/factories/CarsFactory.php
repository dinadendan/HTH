<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// import User model 
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // get random user_id from users table
            'user_id' => User::all()->random()->id,
            // type is a string field
            'type' => $this->faker->word,
        ];
    }
}
