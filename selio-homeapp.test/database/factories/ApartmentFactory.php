<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       return [
            'name' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            'address' => $this->faker->address,
            'main_photo'=>$this->faker->imageUrl(150,150),
            'latitude' =>$this->faker->numberBetween(-20, 20),
            'longitude' => $this->faker->numberBetween(-20, 20),
            'people_minimum' => $this->faker->numberBetween(1, 5),
            'people_maximum' => $this->faker->numberBetween(5, 100),
            'price_per_hour' => $this->faker->numberBetween(1000, 100000),
            'is_featured' => $this->faker->boolean(85),
        ];
    }
}




