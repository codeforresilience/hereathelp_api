<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 12:43 AM
 */

class CategoryTableSeeder extends Seeder {
	public function run() {
		DB::table('categories')->delete();

		$data = [
			[//1
				'slug' => 'earthquake',
				'title' => 'Earthquake',
				'description' => ''
			],
			[//2
				'slug' => 'flood',
				'title' => 'Flood',
				'description' => ''
			],
			[//3
				'slug' => 'typhoon',
				'title' => 'Typhoon',
				'description' => ''
			],
			[//4
				'slug' => 'landslide',
				'title' => 'Landslide',
				'description' => ''
			],
			[//5
				'slug' => 'fire',
				'title' => 'Fire',
				'description' => ''
			],
			[//6
				'slug' => 'bldg_collapse',
				'title' => 'Structural Collapse',
				'description' => ''
			],
			[//7
				'slug' => 'explosion',
				'title' => 'Explosion',
				'description' => ''
			],
			[//8
				'slug' => 'tsunami',
				'title' => 'Flood',
				'description' => ''
			],
			[//9
				'slug' => 'tornado',
				'title' => 'Tornado',
				'description' => ''
			],
			[//10
				'slug' => 'stampede',
				'title' => 'Stampede',
				'description' => ''
			],
			[//11
				'slug' => 'volc_erupt',
				'title' => 'Volcanic Eruption',
				'description' => ''
			],
			[//12
				'slug' => 'nuclear',
				'title' => 'Radioactive Spill/Leak',
				'description' => ''
			],
			[//13
				'slug' => 'alien',
				'title' => 'Alien Invasion!!!',
				'description' => ''
			],
			[//14
				'slug' => 'asteroid',
				'title' => 'ASTEROID IMPACT - GG na phowezz!~',
				'description' => ''
			],
		];

		foreach ($data as $d)
		{
			Category::create($d);
		}
	}
}