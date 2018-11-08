<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();

		$role = [
			'name' => 'Administrator',
			'slug' => 'administrator',
			'permissions' => [
				'admin' => true,
			]
		];

		$adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();

		// $individual = [
		// 	'name' => 'individual',
		// 	'slug' => 'Individual',
		// ];

		$admin = [
			'email'    => 'admin@arn.ae',
			'password' => 'secretpassword',
			'first_name' => 'Kristian',
			'last_name' => 'Babiera',
		];

		$adminUser = Sentinel::registerAndActivate($admin);
		$adminUser->roles()->attach($adminRole);
    }
}
