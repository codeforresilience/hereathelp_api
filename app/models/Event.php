<?php
/**
 * Created by PhpStorm.
 * 
 * User: Mark Jayson
 * Date: 5/9/14
 * Time: 11:36 PM
 *
 * @property integer $id
 * @property string $location
 * @property string $geobounds
 * @property integer $est_alive
 * @property integer $est_dead
 * @property integer $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Message[] $messages
 * @property-read \Category $category
 */

class Event extends Eloquent {
	protected $softDelete = true;


	public function messages() {
		return $this->hasMany('Message');
	}

	public function category() {
		return $this->hasOne('Category');
	}
}