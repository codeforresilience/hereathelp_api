<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 12:45 AM
 */

class Message extends Eloquent {
	public function user() {
		return $this->belongsTo('User');
	}

	public function event() {
		return $this->belongsTo('Event');
	}
}