<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $faker = $this->faker;

        $expiration = $faker->optional(0.7)->dateTimeBetween('now', '+2 years');

        return [
            'name' => $faker->words(rand(2,4), true),
            'quantity' => $faker->numberBetween(1, 100),
            'description' => $faker->sentence(rand(6, 12)),
            'expiration_date' => $expiration ? $expiration->format('Y-m-d') : null,
            'status' => $faker->randomElement(['active', 'inactive']),
        ];
    }
}
