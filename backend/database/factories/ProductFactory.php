<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'unit_id'=> \App\Models\Unit::inRandomOrder()->first()->id,
            'supplier_id' => \App\Models\Supplier::inRandomOrder()->first()->id,
            'stock' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1000, 200000),
        ];
    }
}
