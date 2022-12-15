<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsAndMedicinesToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make 5 CarsAndMedicinesTools
        \App\Models\Cars_and_Medicines_tools::factory()->count(5)->create();


    }
}
