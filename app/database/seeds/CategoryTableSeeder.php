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
			[
				'slug' => 'earthquake',
				'title' => 'Earthquake',
				'description' => ''
			],
			[
				'slug' => 'flood',
				'title' => 'Flood',
				'description' => ''
			],
			[
				'slug' => 'typhoon',
				'title' => 'Typhoon',
				'description' => ''
			],
			[
				'slug' => 'landslide',
				'title' => 'Landslide',
				'description' => ''
			],
			[
				'slug' => 'fire',
				'title' => 'Fire',
				'description' => ''
			],
			[
				'slug' => 'bldg_collapse',
				'title' => 'Structural Collapse',
				'description' => ''
			],
			[
				'slug' => 'explosion',
				'title' => 'Explosion',
				'description' => ''
			],
			[
				'slug' => 'tsunami',
				'title' => 'Flood',
				'description' => ''
			],
			[
				'slug' => 'tornado',
				'title' => 'Tornado',
				'description' => ''
			],
			[
				'slug' => 'stampede',
				'title' => 'Stampede',
				'description' => ''
			],
			[
				'slug' => 'volc_erupt',
				'title' => 'Volcanic Eruption',
				'description' => ''
			],
			[
				'slug' => 'nuclear',
				'title' => 'Radioactive Spill/Leak',
				'description' => ''
			],
			[
				'slug' => 'alien',
				'title' => 'Alien Invasion!!!',
				'description' => ''
			],
			[
				'slug' => 'asteroid',
				'title' => 'ASTEROID IMPACT - GG na phowezz!~',
				'description' => ''
			],
		];

		Category::create($data);
	}
}