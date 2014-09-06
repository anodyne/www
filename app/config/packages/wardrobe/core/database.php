<?php

return array(
	'default' => 'mysql',

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../../../../../Anodyne/database/news.sqlite',
			'prefix'   => '',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => $_ENV['DB_USERS_HOST'],
			'database'  => $_ENV['DB_NEWS_NAME'],
			'username'  => $_ENV['DB_USERS_USERNAME'],
			'password'  => $_ENV['DB_USERS_PASSWORD'],
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),

	),
);
