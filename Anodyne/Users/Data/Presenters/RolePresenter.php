<?php namespace Anodyne\Users\Data\Presenters;

use Laracasts\Presenter\Presenter;

class RolePresenter extends Presenter {

	public function name()
	{
		return $this->entity->name;
	}

}