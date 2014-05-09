<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 12:45 AM
 */

class Category extends Eloquent {
	public function events() {
		return $this->belongsToMany('Event');
	}
}