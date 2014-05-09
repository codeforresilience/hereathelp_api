<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 1:30 AM
 */

class ProvisionTableSeeder extends Seeder {
	public function run() {
		DB::table('provisions')->delete();

		$data = [
			[
				'need_id' => 'asidjsaijd',
				'event_id' => 'sadasdasd',
				'content' => 'daksdsajdksajdasjdkjkas'
			],
		];

		Provision::create($data);
	}
}