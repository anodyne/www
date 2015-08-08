<?php namespace Anodyne\Controllers;

use App, View, Github;

class NovaController extends \BaseController {

	public function index()
	{
		// Set an initial version
		$currentVersion = '2.4.2';

		if (App::environment() == 'production')
		{
			// Grab the version
			$currentVersion = Github::currentRelease('anodyne', 'nova')['name'];
		}

		$versions = [
			$currentVersion => $currentVersion,
			'2.3.2' => '2.3.2',
			/*'2.2.3' => '2.2.3',
			'2.1.3' => '2.1.3',
			'2.0.3' => '2.0.3',
			'1.2.6' => '1.2.6',*/
		];

		$genres = [
			''		=> '---',
			'bl5'	=> "Babylon 5",
			'bln'	=> "Blank",
			'bsg'	=> "Battlestar Galactica",
			'dnd'	=> "Dungeons and Dragons",
			'dsv'	=> "seaQuest DSV",
			'sg1'	=> "Stargate SG-1",
			'sga'	=> "Stargate Atlantis",
			'baj'	=> "Bajorans (Star Trek)",
			'crd'	=> "Cardassians (Star Trek)",
			'ds9'	=> "Deep Space 9 (Star Trek)",
			'ent'	=> "Enterprise Era (Star Trek)",
			'kli'	=> "Klingons (Star Trek)",
			'mov'	=> "Movie Era (Star Trek)",
			'rom'	=> "Romulans (Star Trek)",
			'tos'	=> "The Original Series (Star Trek)",
			'sto'	=> "Star Trek Online",
		];

		return View::make('pages.nova.index', compact('genres', 'versions'));
	}

	public function nextgen()
	{
		return View::make('pages.nova.nextgen');
	}

}