<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/9/14
 * Time: 11:36 PM
 */

class Event extends Eloquent {
	public function messages() {
		return $this->hasMany('Message');
	}

	public function category() {
		return $this->hasOne('Category');
	}
}