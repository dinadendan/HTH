<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// import Cars model and Medicines model
use App\Models\Cars;
use App\Models\Medicines;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars_and_Medicines>
 */
class Cars_and_MedicinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // get random cars_id from cars table
            'cars_id' => Cars::all()->random()->id,
            // get random medicines_id from medicines table
            'medicines_id' => Medicines::all()->random()->id,
            // number is a integer field
            'number' => $this->faker->numberBetween(1, 15),


        ];
    }
}
