<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 1:25 AM
 */

class EventTableSeeder extends Seeder {
	public function run() {
		DB::table('events')->delete();

		$data = [
			[
				'location' => 'asidjsaijd',
				'geobounds' => 'sadasdasd',
				'est_alive' => 1,
				'est_dead' => 2
			],
		];

		Event::create($data);
	}
}