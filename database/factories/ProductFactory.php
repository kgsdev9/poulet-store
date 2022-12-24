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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->name(),
            'price' => rand(100, 200),
            'img_premiere_plan' => fake()->imageUrl(),
            'img_multiple' => fake()->imageUrl(),
            'tendance' => rand(0, 1),
            'populaire' => rand(0, 1),
            'descritpion'  =>fake()->text(300),
            'quantity' => rand(100, 200),
            'category_id' => rand(1, 2),
            'created_at'  => now()
        ];
    }
}
