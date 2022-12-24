<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{

    protected $model  = Supplier::class ;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake()->lastName(),
            'sirname' => fake()->firstName(),
            'date_of_naissance' => fake()->dateTimeBetween('2022-10-25 21:01:04', '2023-10-25 21:01:04'),
            'here_naissance' => fake()->name(),
            'country' => fake()->country(),
            'phone_number_one' => fake()->phoneNumber(),
            'phone_number_two' => fake()->phoneNumber(),
            'city'   => fake()->city(),
            'adress'    => fake()->address(),
            'gender'  => array_rand(["M", "F"], 1),
            'password_identity'  => array_rand(["PERMIS DE CONDUITE", "CNI", "PASSPORT", "ATTESTATION"],1),
            'number_identity' => fake()->creditCardNumber(),
            'created_at'   => now()
        ];
    }
}
