<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
           'name' =>'B.Sc in Computer Science',
           'department_id'=> Department::first()['id'],
           'abbreviation'=>'ICS',
        ]);

        Program::create([
           'name' =>'B.Sc with Computer Science',
           'department_id'=> Department::first()['id'],
           'abbreviation'=>'WCS',
        ]);

        Program::create([
           'name' =>'B.Sc in Telecommunication Engineering',
           'department_id'=> Department::latest()->first()['id'],
           'abbreviation'=>'TE',
        ]);

        Program::create([
           'name' =>'B.Sc in Electronics Science and Communication',
           'department_id'=> Department::latest()->first()['id'],
           'abbreviation'=>'ESC',
        ]);
    }
}
