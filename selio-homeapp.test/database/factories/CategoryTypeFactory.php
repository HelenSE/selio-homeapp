<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->country,
            'slug' => Str::slug($this->faker->name),
            'photo'=>$this->faker->imageUrl(150,150)
        ];
    }
}
