<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\TypeArticle>
 */
class TypeArticleFactory extends Factory
{

    protected $model  = TypeA::class ;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => array_rand(['toyota', 'peugeot', 'mutshibishi'], 1)
        ];
    }
}
