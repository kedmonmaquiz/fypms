<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
           'name' =>'Computer Science and Engineering',
           'college_id'=> College::first()['id'],
           'abbreviation'=>'CSE',
           'description'=>'',
        ]);

        Department::create([
           'name' =>'Electronics and Telecommunication Engineering',
           'college_id'=> College::first()['id'],
           'abbreviation'=>'CSE',
           'description'=>'',
        ]);
    }
}
