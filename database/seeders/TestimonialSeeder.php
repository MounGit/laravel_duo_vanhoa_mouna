<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
           [
                "description"=>"Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                 suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, 
                 risus at semper.",
                 "image"=>"testimonials/testimonials-1.jpg",
                 "nom"=>"Saul Goodman",
                 "metier"=>"Ceo Founder"
            ],[
                "description"=>" Export tempor illum tamen malis malis eram quae irure esse labore quem 
                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat 
                irure amet legam anim culpa.",
                 "image"=>"testimonials/testimonials-2.jpg",
                 "nom"=>"Sara Wilsson",
                 "metier"=>"Designer"
            ],[
                "description"=>" Enim nisi quem export duis labore cillum quae magna enim sint quorum 
                nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore 
                quis sint minim.",
                 "image"=>"testimonials/testimonials-3.jpg",
                 "nom"=>"Jena Karlis",
                 "metier"=>"Store Owner"
            ],[
                "description"=>" Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos
                 export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt 
                 elit fore quem dolore labore illum veniam.",
                 "image"=>"testimonials/testimonials-4.jpg",
                 "nom"=>"Matt Brandon",
                 "metier"=>"Freelancer"
            ],[
                "description"=>" Quis quorum aliqua sint quem legam fore sunt eram irure aliqua 
                veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum 
                fugiat legam esse veniam culpa fore nisi cillum quid.",
                 "image"=>"testimonials/testimonials-5.jpg",
                 "nom"=>"John Larson",
                 "metier"=>"Entrepreneur"
            ]
        ]);
    }
}
