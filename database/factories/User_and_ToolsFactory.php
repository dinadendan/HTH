<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// import User model and medicines_tools
use App\Models\User;
use APP\Models\Medicines_tools;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_and_Tools>
 */
class User_and_ToolsFactory extends Factory
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
            // get random tool_id from tools table
            'medicines_tools_id' => Medicines_tools::all()->random()->id,
            // amount is a integer field
            'amount' => $this->faker->numberBetween(1, 100),
        ];
    }
}
