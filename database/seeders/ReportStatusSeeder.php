<?php

namespace Database\Seeders;

use App\Models\ReportStatus;
use Illuminate\Database\Seeder;

class ReportStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ReportStatus::create([
          'name'=>'waiting',
          'display_name'=>'Waiting',
          'description'=>'',
        ]);

        ReportStatus::create([
          'name'=>'rejected',
          'display_name'=>'Rejected',
          'description'=>'',
        ]);
        ReportStatus::create([
          'name'=>'approved',
          'display_name'=>'Approved',
          'description'=>'',
        ]);

        
    }
}
