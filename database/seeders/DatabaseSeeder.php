<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\LaboratorySeeder;
use Database\Seeders\AdminLabSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\InventorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LaboratorySeeder::class,
            AdminLabSeeder::class,
            StudentSeeder::class,
            InventorySeeder::class
        ]);
    }
}
