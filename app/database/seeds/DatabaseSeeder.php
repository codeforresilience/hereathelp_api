<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		$this->call('CategoryTableSeeder');
		$this->call('EventTableSeeder');
		$this->call('NeedTableSeeder');
		// $this->call('MessageTableSeeder');
		$this->call('ProvisionTableSeeder');

		$this->call('UserTableSeeder');

		$this->call('RoleTableSeeder');
		$this->call('AssignedRoleTableSeeder');
	}

}
