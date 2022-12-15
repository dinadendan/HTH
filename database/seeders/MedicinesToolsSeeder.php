<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// define Medicines_tools model to use
use App\Models\Medicines_tools;

class MedicinesToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make 5 medicines_tools
        \App\Models\Medicines_tools::factory()->count(5)->create();
    }
}
