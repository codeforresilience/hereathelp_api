<?php
/**
 * Created by PhpStorm.
 * 
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 12:46 AM
 *
 * @property integer $id
 * @property integer $need_id
 * @property integer $event_id
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Event $event
 * @property-read \Illuminate\Database\Eloquent\Collection|\Need[] $needs
 */
class Provision extends BaseModel {
	protected $softDelete = true;

	protected $hidden = ['id', 'deleted_at', 'event_id', 'need_id'];
}