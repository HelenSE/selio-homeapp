<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\CategoryType;
use App\Models\Location;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartment::factory()->count(6)
            ->create();
    }
}
