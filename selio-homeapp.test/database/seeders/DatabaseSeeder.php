<?php

namespace Database\Seeders;

use App\Models\ApartmentCategoryType;
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
//         \App\Models\User::factory(9)->create();
//         $this->call([
//             ApartmentSeeder::class,
//             LocationSeeder::class,
//             CategoryTypeSeeder::class
//         ]);
        ApartmentCategoryType::factory(10)->create();
    }
}
