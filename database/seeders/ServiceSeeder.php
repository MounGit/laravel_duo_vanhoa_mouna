<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                 
                  
                  "titre"=>"Lorem Ipsum",
                  "texte"=>"Voluptatum deleniti atque
                   corrupti quos dolores et quas molestias 
                   excepturi"
             ],[
                 
                  
                  "titre"=>"Sed ut perspiciatis",
                  "texte"=>"Duis aute irure dolor in
                   reprehenderit in voluptate velit esse 
                   cillum dolore"
             ],[
                 
                  
                  "titre"=>"Magni Dolores",
                  "texte"=>"Excepteur sint occaecat 
                  cupidatat non proident, sunt in culpa
                   qui officia"
             ],[
                 
                  
                "titre"=>"Nemo Enim",
                "texte"=>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis"
           ]
         ]);
    }
}
