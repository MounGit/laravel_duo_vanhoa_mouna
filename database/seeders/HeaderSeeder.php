<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            "name" => "Bikin",
            "nav1" => "Home",
            "nav2" => "About",
            "nav3" => "Services",
            "nav4" => "Portfolio",
            "nav5" => "Team",
            "nav6" => "Contact",
            "nav7" => "Get Started",
        ]);
    }
}
