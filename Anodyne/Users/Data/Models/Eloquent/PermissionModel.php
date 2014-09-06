<?php namespace Anodyne\Users\Data\Models\Eloquent;

use Config, SoftDeletingTrait;
use Zizaco\Entrust\EntrustPermission;
use Laracasts\Presenter\PresentableTrait;

class PermissionModel extends EntrustPermission {

	use PresentableTrait;
	use SoftDeletingTrait;

	protected $table = 'permissions';

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