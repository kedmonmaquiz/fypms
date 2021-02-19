<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        College::create([
           'name' =>'College of Information and Communication Technology',
           'abbreviation'=>'CoICT',
           'description'=>'located at Sayansi Kijitonyama',
        ]);

    }
}
