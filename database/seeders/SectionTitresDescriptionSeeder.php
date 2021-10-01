<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionTitresDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectionstitresdescriptions')->insert([
            [
             
                "titreheader"=>"Build Better Websites With Bikin",
                "sous_titreheader"=>"We are team of talented designers making websites with Bootstrap",
                "boutonheader"=>"GET STARTED",

                "titreabout"=>"Voluptatem dignissimos provident quasi",
                "sous_titreabout"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in
                reprehenderit",
                "boutonabout"=>"About us",

                "titrefeatures"=>"Features",
                "sous_titreheader"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam
                cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis
                commodi quidem hic quas.",

                "titreservice"=>"Services",
                "sous_titreservice"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur 
                ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. 
                Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",

                
             ]
         ]);
    }
}
