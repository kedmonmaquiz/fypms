<?php

namespace Database\Seeders;

use App\Models\ReportType;
use Illuminate\Database\Seeder;

class ReportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReportType::create([
          'name'=>'sem_1_mid',
          'display_name'=>'Semester I Mid Report',
          'description'=>'',
        ]);

        ReportType::create([
          'name'=>'sem_1_end',
          'display_name'=>'Semester I End Report',
          'description'=>'',
        ]);

        ReportType::create([
          'name'=>'sem_2_mid',
          'display_name'=>'Semester II Mid Report',
          'description'=>'',
        ]);

        ReportType::create([
          'name'=>'sem_2_end',
          'display_name'=>'Semester II End Report',
          'description'=>'',
        ]);
    }
}
