<?php namespace Anodyne\Users\Data\Presenters;

use Laracasts\Presenter\Presenter;

class PermissionPresenter extends Presenter {

	public function displayName()
	{
		return $this->entity->display_name;
	}

	public function name()
	{
		return $this->entity->name;
	}

}