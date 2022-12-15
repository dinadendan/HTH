<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicines_tools>
 */
class Medicines_toolsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // tool_name is a string
            'tool_name' => $this->faker->word,
            // tool_type is a string
            'tool_type' => $this->faker->word,
        ];
    }
}
