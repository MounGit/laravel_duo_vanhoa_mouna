<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                 
                  "image"=>"team/team-1.jpg",
                  "nom"=>"Walter White",
                  "metier"=>"Chief Executive Officer"
             ],[
                 
                  "image"=>"team/team-2.jpg",
                  "nom"=>"Sarah Jhonson",
                  "metier"=>"Designer"
             ],[
                 
                  "image"=>"team/team-3.jpg",
                  "nom"=>"William Anderson",
                  "metier"=>"CTO"
             ],[
                 
                  "image"=>"team/team-4.jpg",
                  "nom"=>"Amanda Jepson",
                  "metier"=>"Accountant"
             ]
         ]);
    }
}
