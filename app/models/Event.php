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

class Event extends BaseModel {
	protected $softDelete = true;

	protected $appends = ['parse_location_name'];

	protected $hidden = ['deleted_at'];

	protected $with = ['needs', 'reporter'];

	public function messages() {
		return $this->hasMany('Message');
	}

	public function category() {
		return $this->hasOne('Category');
	}

	public function needs() {
		return $this->belongsToMany('Need', 'provisions');
	}

	public function reporter() {
		return $this->belongsTo('User');
	}

	public function parseLocationName() {
		$location = explode(',', $this->location);

		$dumper = new \Geocoder\Dumper\GeoJsonDumper();

		return $dumper->dump(Geocoder::reverse($location[0], $location[1]));
	}

	public function parseGeobounds() {
		$geobounds = explode(';', $this->geobounds);

		return $geobounds;
	}

	public function getParseLocationNameAttribute() {
		return $this->parseLocationName();
	}

	public function getParseGeobounds() {
		return $this->parseGeobounds();
	}
}