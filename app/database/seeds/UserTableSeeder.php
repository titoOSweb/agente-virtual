<?php

class UserTableSeeder extends Seeder {

	public function run()
	{

		User::create(array(
			'full_name' => 'Eli José Carrasquero',
			'email' => 'ielijose@gmail.com',
			'password' => \Hash::make('1234'),
			));

		User::create(array(
			'full_name' => 'Administrador',
			'email' => 'administrador',
			'password' => \Hash::make('agente'),
			));

		User::create(array(
			'full_name' => 'Julio Nava',
			'email' => 'titos123.nava@gmail.com',
			'password' => \Hash::make('21044457'),
			));
		
	}

}