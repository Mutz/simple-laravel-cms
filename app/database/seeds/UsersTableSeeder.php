<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
			array('name'=>'Natalia',
			'email'=>'reservas@casadepedra-valedocapao.com.br',
			'password'=>Hash::make('13133344')
			),
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
