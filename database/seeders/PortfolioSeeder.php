<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                "url" => "portfolio/portfolio-1.jpg",
                "name" => "App 1",
                "category"=> "app",
            ],
            [
                "url" => "portfolio/portfolio-2.jpg",
                "name" => "Web 3",
                "category"=> "web",
            ],
            [
                "url" => "portfolio/portfolio-3.jpg",
                "name" => "App 2",
                "category"=> "app",
            ],
            [
                "url" => "portfolio/portfolio-4.jpg",
                "name" => "Card 2",
                "category"=> "card",
            ],
            [
                "url" => "portfolio/portfolio-5.jpg",
                "name" => "Web 2",
                "category"=> "web",
            ],
            [
                "url" => "portfolio/portfolio-6.jpg",
                "name" => "App 3",
                "category"=> "app",
            ],
            [
                "url" => "portfolio/portfolio-7.jpg",
                "name" => "Card 1",
                "category"=> "card",
            ],
            [
                "url" => "portfolio/portfolio-8.jpg",
                "name" => "Card 3",
                "category"=> "card",
            ],
            [
                "url" => "portfolio/portfolio-9.jpg",
                "name" => "Web 3",
                "category"=> "web",
            ]
        ]);
    }
}
