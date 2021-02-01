<?php

namespace Database\Seeders;

use App\Models\Role;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([ // 'name', 'display_name', 'description'
			'name' => 'admin',
			'display_name' => 'System Admin',
			'description' => 'All access user, Highest Access',
		]);
		Role::create([ // 'name', 'display_name', 'description'
			'name' => 'coordinator',
			'display_name' => 'Coordinator',
			'description' => 'Roles for Coordinator, Higher Access',
		]);
		Role::create([ // 'name', 'display_name', 'description'
			'name' => 'supervisor',
			'display_name' => 'Supervisor',
			'description' => 'Roles for System Supervisor, Higher Access',
		]);
		Role::create([ // 'name', 'display_name', 'description'
			'name' => 'student',
			'display_name' => 'Student',
			'description' => 'Roles for Student, Medium Higher Access',
		]);
    }
}
