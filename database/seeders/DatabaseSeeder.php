<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

use App\Models\Product;

use Illuminate\Database\Seeder;
use Database\Factories\TypeArticleFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    $this->call(RoleSeeder::class);
        User::factory(100)->create();
        $this->call(CategorySeeder::class);
       Product::factory(50)->create();

    }
}
