<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use App\Models\Department;
use App\Models\Program;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
           'username' =>'kedmon.maquiz',
           'first_name'=>'Kedmon',
           'middle_name'=>'Joseph',
           'last_name'=>'Maquiz',
           'email'=>'jkedmon95@gmail.com',
           'gender'=>'male',
           'phone'=>'0675580888',
           'office_no'=>'B108',
           'category'=>'staff',
           'password'=>\Hash::make('MAQUIZ'),
        ]);
        $user->attachRoles(Role::where('name','admin')->pluck('id'));
        
        $user = User::create([
           'username' =>'joseph.cosmas',
           'first_name'=>'Joseph',
           'middle_name'=>'Cosmas',
           'last_name'=>'Mushi',
           'email'=>'josephcosmas@gmail.com',
           'gender'=>'male',
           'phone'=>'0786789809',
           'office_no'=>'A24',
           'category'=>'staff',
           'department_id'=>Department::first()['id'],
           'password'=>\Hash::make('MUSHI'),
        ]);
        $user->attachRoles(Role::where('name','coordinator')->orWhere('name','supervisor')->pluck('id'));

        $user = User::create([
           'username' =>'hellen.kalinga',
           'first_name'=>'Hellen',
           'middle_name'=>'',
           'last_name'=>'Kalinga',
           'email'=>'hellenkalinga@gmail.com',
           'gender'=>'female',
           'phone'=>'0675580888',
           'office_no'=>'B014',
           'category'=>'staff',
           'department_id'=> Department::first()['id'],
           'password'=>\Hash::make('KALINGA'),
        ]);
        $user->attachRoles(Role::where('name','supervisor')->pluck('id'));
        
        $user = User::create([
           'username' =>'2018-04-07388',
           'first_name'=>'Kedmon',
           'middle_name'=>'Joseph',
           'last_name'=>'Maquiz',
           'email'=>'kedmonmaquiz95@gmail.com',
           'gender'=>'male',
           'phone'=>'0675580888',
           'category'=>'student',
           'program_id'=> Program::first()['id'],
           'academic_year_id'=>AcademicYear::where('status',1)->first()['id'],
           'password'=>\Hash::make('MAQUIZ'),
        ]);
        $user->attachRoles(Role::where('name','student')->pluck('id'));
    }
}
