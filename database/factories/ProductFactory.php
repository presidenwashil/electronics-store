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
            'category' => $this->faker->word(),
            'price' => $this->faker->numberBetween(1000, 100000),
            'stock' => $this->faker->numberBetween(0, 100),
            'description' => $this->faker->sentence(),
            'specifications' => $this->faker->text(100),
            'image_url' => $this->faker->imageUrl(640, 480, 'products', true, 'Faker'),
        ];
    }
}
