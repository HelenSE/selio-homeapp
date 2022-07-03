<?php

namespace Database\Seeders;

use Database\Factories\ApartmentFactory;
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
         \App\Models\User::factory(9)->create();
         $this->call([
             ApartmentSeeder::class,
             LocationSeeder::class,
             CategoryTypeSeeder::class
         ]);
    }
}
