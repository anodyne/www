<?php namespace Anodyne\Users\Data\Models;

use Config,
	SoftDeletingTrait;
use Zizaco\Entrust\HasRole;
use Illuminate\Auth\UserTrait,
	Illuminate\Auth\UserInterface,
	Illuminate\Auth\Reminders\RemindableTrait,
	Illuminate\Auth\Reminders\RemindableInterface;
use Laracasts\Presenter\PresentableTrait;

class User extends \Model implements UserInterface, RemindableInterface {

	use HasRole;
	use UserTrait;
	use RemindableTrait;
	use PresentableTrait;
	use SoftDeletingTrait;
	
	protected $table = 'core_users';

	protected $fillable = ['name', 'email', 'password', 'url', 'bio', 'username',
		'twitter', 'facebook', 'google', 'remember_token'];

	protected $hidden = ['password', 'remember_token'];

	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	protected $presenter = 'Anodyne\Users\Data\Presenters\UserPresenter';

	/*
	|--------------------------------------------------------------------------
	| Accessors/Mutators
	|--------------------------------------------------------------------------
	*/

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = \Hash::make($value);
	}

	/*
	|--------------------------------------------------------------------------
	| Model Scopes
	|--------------------------------------------------------------------------
	*/

	public function scopeUsername($query, $username)
	{
		$query->where('username', $username);
	}

	/*
	|--------------------------------------------------------------------------
	| Relationships
	|--------------------------------------------------------------------------
	*/

	public function roles()
    {
    	return $this->belongsToMany(
        	Config::get('entrust::role'),
        	Config::get('entrust::assigned_roles_table'),
        	'user_id',
        	'role_id'
        );
    }

}