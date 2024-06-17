<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tovar>
 */
class TovarFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'title' => fake()->name(),
           'Availability'=> fake()->enum(),
           'Price'=> fake()->number( 5),
           'description'=> fake()->text(100),
           'Short_description'=> fake()->text(50),
           'Category'=> fake()->enum(),
           'Subcategory'=> fake()->enum(),
           'Subcategory'=> fake()->enum(),
           'Seasonality'=> fake()->enum(),
           'Size'=> fake()->enum(),
           'Type of material'=> fake()->enum(),
           'photo'=> fake()->image(dir: "flowers"),
        ];
    }
}
