<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_articles')->insert([
                ["name" => "Toyota"],
                ["name" => "Peugeot"],
                ["name" => "Land-Cruser"],
                ["name" => "Range-Rover"],
                ["name" => "Tom-Cruser"],
        ]);
    }
}
