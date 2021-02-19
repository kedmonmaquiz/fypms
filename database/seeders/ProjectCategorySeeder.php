<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectCategory::create([
           'name' =>'aggriculture',
           'display_name'=> 'Aggriculture',
           'description'=>'',
        ]);

        ProjectCategory::create([
           'name' =>'education',
           'display_name'=> 'Education',
           'description'=>'',
        ]);

        ProjectCategory::create([
           'name' =>'transport',
           'display_name'=> 'Transport',
           'description'=>'',
        ]);

        ProjectCategory::create([
           'name' =>'security',
           'display_name'=> 'Security',
           'description'=>'',
        ]);

        ProjectCategory::create([
           'name' =>'bussiness',
           'display_name'=> 'Bussiness',
           'description'=>'',
        ]);

        ProjectCategory::create([
           'name' =>'healthcare',
           'display_name'=> 'Healthcare',
           'description'=>'',
        ]);

        ProjectCategory::create([
           'name' =>'industry',
           'display_name'=> 'Industry',
           'description'=>'',
        ]);

        ProjectCategory::create([
           'name' =>'sports',
           'display_name'=> 'Sports',
           'description'=>'',
        ]);
        ProjectCategory::create([
           'name' =>'technology',
           'display_name'=> 'Technology',
           'description'=>'',
        ]);
    }
}
