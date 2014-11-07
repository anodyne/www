<?php namespace Anodyne\Services;

class RolesService {

	const XTRAS_ADMINISTRATOR	= 1;
	const XTRAS_USER			= 2;
	const XTRAS_SKINS			= 3;
	const XTRAS_MODS			= 4;
	const XTRAS_RANKS			= 5;
	const HELP_ADMINISTRATOR	= 6;
	const HELP_AUTHOR			= 7;
	const USERS_ADMINISTRATOR	= 8;
	const SUSPENDED_USER		= 9;

	/**
	 * Define what roles should be given to new users when they register for
	 * their AnodyneID.
	 *
	 * @return	array
	 */
	public static function getDefaultRoles()
	{
		return [
			self::XTRAS_USER,
			self::XTRAS_SKINS,
			self::XTRAS_MODS,
		];
	}

}