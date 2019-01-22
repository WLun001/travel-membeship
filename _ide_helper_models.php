<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Division
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Member[] $members
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Division newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Division newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Division query()
 */
	class Division extends \Eloquent {}
}

namespace App{
/**
 * App\Group
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Member[] $members
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group query()
 */
	class Group extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Member
 *
 * @property-read \App\Division $division
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Group[] $groups
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Member query()
 */
	class Member extends \Eloquent {}
}

