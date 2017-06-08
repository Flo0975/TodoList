<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
	DB::table('users')->delete();

	$users = array(
		array(
			'name' => 'Terry',
			'password' => Hash::make('terry'),
			'email' => 'exemple@exemple.com'
			)
		);
	DB::table('users')->insert($users);
		}
}
