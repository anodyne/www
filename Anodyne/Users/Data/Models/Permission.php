<?php namespace Anodyne\Users\Data\Models;

use Config, SoftDeletingTrait;
use Zizaco\Entrust\EntrustPermission;
use Laracasts\Presenter\PresentableTrait;

class Permission extends EntrustPermission {

	use PresentableTrait;
	use SoftDeletingTrait;

	protected $table = 'core_permissions';

	protected $fillable = ['name', 'display_name'];

	protected $presenter = 'Anodyne\Users\Data\Presenters\PermissionPresenter';

	/*
	|--------------------------------------------------------------------------
	| Relationships
	|--------------------------------------------------------------------------
	*/

	public function roles()
    {
        return $this->belongsToMany(
        	Config::get('entrust::role'),
        	Config::get('entrust::permission_role_table'),
        	'permission_id',
        	'role_id'
        );
    }

}