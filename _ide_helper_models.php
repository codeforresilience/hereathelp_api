<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace {
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
	class Category {}
}

namespace {
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
	class Message {}
}

namespace {
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
	class Need {}
}

namespace {
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
	class Provision {}
}

namespace {
/**
 * User
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $confirmation_code
 * @property boolean $confirmed
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $position
 * @property string $contacts
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Message[] $messages
 */
	class User {}
}

