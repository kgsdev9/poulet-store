<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model  = Article::class ;



    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'libelle_serie' => $this->faker->swiftBicNumber,
            'url_image' => $this->faker->imageUrl(),
            'type_article_id' => rand(1, 4),
            'available' => rand(0, 1)
        ];
    }
}
