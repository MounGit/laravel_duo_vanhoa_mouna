<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterDroiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_droites')->insert([
            [
                "titreplus" => "Join Our Newsletter",
                "description" => "Tamen quem nulla quae legam multos aute sint culpa legam noster magna",
                "copyright" => " Copyright Bikin. All Rights Reserved",
                
            ]
           
        ]);
    }
}
