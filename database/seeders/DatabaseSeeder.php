<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            MedicinesSeeder::class,
            MedicinesToolsSeeder::class,
            CarsSeeder::class,
            UserAndMedicinesSeeder::class,
            UserAndToolsSeeder::class,
            CarsAndMedicinesSeeder::class,
            CarsAndMedicinesToolsSeeder::class,
        ]);

    }
}
