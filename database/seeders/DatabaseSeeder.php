<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Database\Seeders\CountriesTableSeeder;
use Database\Seeders\StatesTableSeeder;
use Database\Seeders\CitiesTableSeeder;
use Database\Seeders\AreasTableSeeder;

use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\SubcategoriesTableSeeder;
use Database\Seeders\ProfessionalTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(categoriesTableSeeder::class);
        //$this->call(SubcategoriesTableSeeder::class);
        //$this->call(ProfessionalTableSeeder::class);
    }
}
