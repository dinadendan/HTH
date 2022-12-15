<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// import User model and Medicines model
use App\Models\User;
use App\Models\Medicines;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_and_Medicines>
 */
class User_and_MedicinesFactory extends Factory
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
            // get random medicine_id from medicines table
            'medicine_id' => Medicines::all()->random()->id,
            // amount is a integer field
            'amount' => $this->faker->numberBetween(1, 100),
        ];
    }
}
