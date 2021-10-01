<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "url" => "features-1.png",
                "title" => "Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
                "description" => "                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "p1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "p2" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "p3" => "Ullam est qui quos consequatur eos accusamus."
            ],
            [
                "url" => "features-2.png",
                "title" => "Corporis temporibus maiores provident",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "p1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate",
                "p2" => "velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in",
                "p3" => " culpa qui officia deserunt mollit anim id est laborum"
            ],
            [
                "url" => "features-3.png",
                "title" => "Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas",
                "description" => "Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.",
                "p1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "p2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",
                "p3" => "Facilis ut et voluptatem aperiam. Autem soluta ad fugiat."
            ],
            [
                "url" => "features-4.png",
                "title" => "Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "p1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate",
                "p2" => "velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in",
                "p3" => "culpa qui officia deserunt mollit anim id est laborum"
            ]
        ]);
    }
}
