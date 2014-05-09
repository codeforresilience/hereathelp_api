<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 1:28 AM
 */

class NeedTableSeeder extends Seeder {
	public function run() {
		DB::table('needs')->delete();

		$data = [
			[
				'slug' => 'food',
				'title' => 'Food and Water',
				'description' => ''
			],
			[
				'slug' => 'clothes',
				'title' => 'Clothes',
				'description' => ''
			],
			[
				'slug' => 'health',
				'title' => 'Health and Amenities',
				'description' => ''
			],
			[
				'slug' => 'shelter',
				'title' => 'Shelter',
				'description' => ''
			],
			[
				'slug' => 'comms',
				'title' => 'Communication',
				'description' => ''
			],
			[
				'slug' => 'elec',
				'title' => 'Electricity',
				'description' => ''
			],
			[
				'slug' => 'equipment',
				'title' => 'Equipment and Machinery',
				'description' => ''
			],
		];

		Need::create($data);
	}
}