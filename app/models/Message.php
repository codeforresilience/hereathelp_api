<?php
/**
 * Created by PhpStorm.
 * 
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 12:45 AM
 *
 * @property integer $id
 * @property string $message
 * @property integer $user_id
 * @property integer $event_id
 * @property-read \User $user
 * @property-read \Event $event
 */

class Message extends BaseModel {
	protected $softDelete = true;

	public function user() {
		return $this->belongsTo('User');
	}

	public function event() {
		return $this->belongsTo('Event');
	}
}