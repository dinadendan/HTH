<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// import Cars model and Medicines_tools model
use App\Models\Cars;
use App\Models\Medicines_tools;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars_and_Medicines_tools>
 */
class Cars_and_Medicines_toolsFactory extends Factory
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
            // get random medicines_tools_id from medicines_tools table
            'medicines_tools_id' => Medicines_tools::all()->random()->id,
            // number is a integer field
            'number' => $this->faker->numberBetween(1, 15),
        ];
    }
}
