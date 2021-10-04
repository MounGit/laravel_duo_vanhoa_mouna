<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            ["name" => "admin"],
            ["name" => "webmaster"],
            ["name" => "editeur"],
        ]);

        DB::table('users')->insert([
            "name" => "test",
            "email" => "test@mail.com",
            "password" => Hash::make('testtest'),
            "role_id" => 3,
            'created_at' => now()
        ]);

        $this->call([
            PortfolioSeeder::class,
            HeaderSeeder::class,
            FeaturesSeeder::class,
            ContactSeeder::class,
            TestimonialSeeder::class,
            TeamSeeder::class,
            AboutSeeder::class,
            ServiceSeeder::class,
            FooterSeeder::class,
            SectionTitresDescriptionSeeder::class
        ]);
    
        User::factory(15)->create();

        

    }
}
