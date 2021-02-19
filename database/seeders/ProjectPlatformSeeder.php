<?php

namespace Database\Seeders;

use App\Models\ProjectPlaform;
use Illuminate\Database\Seeder;

class ProjectPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectPlatform::create([
           'name' =>'android',
           'display_name'=> 'Android',
           'description'=>'',
        ]);

        ProjectPlatform::create([
           'name' =>'web',
           'display_name'=> 'Web',
           'description'=>'',
        ]);

        ProjectPlatform::create([
           'name' =>'hardware',
           'display_name'=> 'Hardware',
           'description'=>'',
        ]);

        ProjectPlatform::create([
           'name' =>'ios',
           'display_name'=> 'IOS',
           'description'=>'',
        ]);

        ProjectPlatform::create([
           'name' =>'desktop',
           'display_name'=> 'Desktop',
           'description'=>'',
        ]);

        ProjectPlatform::create([
           'name' =>'iot',
           'display_name'=> 'IOT',
           'description'=>'',
        ]);
    }
}
