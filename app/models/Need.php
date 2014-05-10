<?php
/**
 * Created by PhpStorm.
 * 
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 1:05 AM
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $description
 */

class Need extends BaseModel {
	public $timestamps = false;

	protected $hidden = ['pivot'];

	protected $with = ['provision'];

	public function provision() {
		return $this->hasOne('Provision');
	}
}