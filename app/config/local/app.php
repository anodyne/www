<?php

return [

	'debug' => true,

	'url' => 'http://localhost',

	'providers' => [
		'Barryvdh\Debugbar\ServiceProvider',
	],

	'aliases' => [
		'Debugbar' => 'Barryvdh\Debugbar\Facade',
	],

];