<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 1:39 AM
 */

class MessageTableSeeder extends Seeder {
	public function run() {
		DB::table('messages')->delete();

		$data = [
			[
				'message' => 'asidjsaijd',
				'user_id' => 1,
				'event_id' => 1
			],
		];

		foreach ($data as $d)
		{
			Message::create($d);
		}
	}
}