<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            "address" =>"A108 Adam Street, New York, NY 535022",
            "email1" =>"info@example.com",
            "email2" =>"contact@example.com",
            "phone1" =>"+1 5589 55488 55",
            "phone2" =>"+1 6678 254445 41"
        ]);
    }
}
