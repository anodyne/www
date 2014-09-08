<?php namespace Anodyne\Users\Data\Models;

use Config, SoftDeletingTrait;
use Zizaco\Entrust\EntrustRole;
use Laracasts\Presenter\PresentableTrait;

class Role extends EntrustRole {

    use PresentableTrait;
    use SoftDeletingTrait;

	protected $table = 'roles';

	protected $fillable = ['name'];

    protected $presenter = 'Anodyne\Users\Data\Presenters\RolePresenter';

    /*
	|--------------------------------------------------------------------------
	| Relationships
	|--------------------------------------------------------------------------
	*/

	public function perms()
    {
        return $this->belongsToMany(
        	Config::get('entrust::permission'),
        	Config::get('entrust::permission_role_table'),
        	'role_id',
        	'permission_id'
        );
    }

    public function users()
	{
		return $this->belongsToMany(
			Config::get('auth.model'),
			Config::get('entrust::assigned_roles_table'),
			'role_id',
			'user_id'
		);
	}

}