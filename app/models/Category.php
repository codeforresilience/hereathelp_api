<?php
/**
 * Created by PhpStorm.
 * 
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 12:45 AM
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\Event[] $events
 */

class Category extends BaseModel {
	public $timestamps = false;
	public function events() {
		return $this->belongsToMany('Event');
	}
}