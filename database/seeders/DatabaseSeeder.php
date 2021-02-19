<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AcademicYearSeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProjectCategorySeeder::class);
        $this->call(ProjectStatusSeeder::class);
        $this->call(ReportTypeSeeder::class);
        $this->call(ReportStatusSeeder::class);
    }
}

