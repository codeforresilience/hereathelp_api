<?php

class RoleTableSeeder extends Seeder {
	public function run() {
		$roles = array(
			[ //1
				'name'        => 'User',
				'description' => 'Ordinary User'
			],
			[ //5
			    'name'        => 'Administrator',
			    'description' => 'The administrator who can do everything.'
		    ]
		);

		foreach ($roles as $role) {
			Role::create($role);
		}

	}	
}
