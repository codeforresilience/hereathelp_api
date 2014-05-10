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

class Need extends Eloquent {
	public $timestamps = false;

	public function provisions() {
		return $this->belongsToMany('Provision');
	}

}