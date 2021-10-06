<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            
                 
                  
                  "titre"=>"Corporis voluptates sit",
                  "texte"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
                   "icone"=>"bx bx-receipt"
        ]);
        DB::table('abouts')->insert([
            
                 
                  
            "titre"=>"Corpouuus voluptates sit",
            "texte"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
             "icone"=>"bx bx-receipt"
  ]);
        /* ,[
                 
                  
                  "titre"=>"Ullamco laboris nisi",
                  "texte"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
                   "icone"=>"bx bx-cube-alt"
             ],[
                 
                  
                  "titre"=>"Labore consequatur",
                  "texte"=>"Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
                   "icone"=>"bx bx-images"
             ],[
                 
                  
                "titre"=>"Beatae veritatis",
                "texte"=>"Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta",
                 "icone"=>"bx bx-shield"
           ],[
           ]
         ]); */
    }
}
