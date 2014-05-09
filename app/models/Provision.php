<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 12:46 AM
 */
class Provision extends Eloquent {
	public function event() {
		return $this->belongsTo('Event');
	}

	public function needs() {
		return $this->hasMany('Need');
	}
}