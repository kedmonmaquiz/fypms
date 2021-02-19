<?php

namespace Database\Seeders;

use App\Models\ProjectStatus;
use Illuminate\Database\Seeder;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectStatus::create([
          'name'=>'waiting',
          'display_name'=>'Waiting',
          'description'=>'',
        ]);

        ProjectStatus::create([
          'name'=>'approved',
          'display_name'=>'Approved',
          'description'=>'',
        ]);

        ProjectStatus::create([
          'name'=>'rejected',
          'display_name'=>'Rejected',
          'description'=>'',
        ]);

        ProjectStatus::create([
          'name'=>'pending',
          'display_name'=>'Pending',
          'description'=>'',
        ]);
    }
}
