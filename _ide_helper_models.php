<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Goods
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Goods onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Goods withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Goods withoutTrashed()
 */
	class Goods extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Todo
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Todo onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Todo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Todo withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Todo withoutTrashed()
 */
	class Todo extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

