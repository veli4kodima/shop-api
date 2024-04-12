<?php

namespace Database\Factories;

use App\Enum\ProductStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => faker()->name(),
            'description' => faker()->text(),
            'count' => faker()->randomDigit(),
            'price' => faker()->randomDigit(),
            'status' => fake()->randomElement([ProductStatus::Draft, ProductStatus::Published])
        ];
    }
}
