<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 3:50 PM
 */

class AssignedRoleTableSeeder extends Seeder {
	public function run() {
		$data = [
			[
				'user_id' => 1,
				'role_id' => 2
			],
			[
				'user_id' => 2,
				'role_id' => 1
			],
			[
				'user_id' => 3,
				'role_id' => 1
			],
			[
				'user_id' => 4,
				'role_id' => 1
			],
			[
				'user_id' => 5,
				'role_id' => 1
			]
		];

		foreach ($data as $d)
		{
			AssignedRole::create($d);
		}

	}
}