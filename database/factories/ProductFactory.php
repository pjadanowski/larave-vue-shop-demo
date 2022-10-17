<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        $category = Category::inRandomOrder()->first();

        return [
            'name'        => $this->faker->words(3, true),
            'description' => $this->faker->sentences(rand(3, 5), true),
            'price'       => $this->faker->numberBetween(1, 30) * 1_000,
            'image'       => 'https://picsum.photos/640/360', //$this->faker->imageUrl(),
            'category_id' => $category !== null ? $category->id : Category::factory(),
        ];
    }
}
