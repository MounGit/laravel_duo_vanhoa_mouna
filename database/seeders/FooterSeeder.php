<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                 
                  "titre"=>"Useful Links",
                  "link1"=>"Home",
                  "link2"=>"About us",
                  "link3"=>"Services",
                  "link4"=>"Terms of service",
                  "link5"=>"Privacy policy",
             ],[
                 
                "titre"=>"Our Services",
                "link1"=>"Web Design",
                "link2"=>"Web Development",
                "link3"=>"Product Management",
                "link4"=>"Marketing",
                "link5"=>"Graphic Design",
           ],
         ]);
    }
}
