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
			[//1
				'slug' => 'consume',
				'title' => 'Food and Consumables',
				'description' => ''
			],
			[//2
				'slug' => 'clothes',
				'title' => 'Clothes',
				'description' => ''
			],
			[//3
				'slug' => 'health',
				'title' => 'Health and Amenities',
				'description' => ''
			],
			[//4
				'slug' => 'shelter',
				'title' => 'Shelter',
				'description' => ''
			],
			[//5
				'slug' => 'comms',
				'title' => 'Communication',
				'description' => ''
			],
			[//6
				'slug' => 'elec',
				'title' => 'Electricity',
				'description' => ''
			],
			[//7
				'slug' => 'equipment',
				'title' => 'Equipment and Machinery',
				'description' => ''
			],
		];

		foreach ($data as $d)
		{
			Need::create($d);
		}
	}
}