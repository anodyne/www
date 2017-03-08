<?php namespace Anodyne\Controllers;

use App,
	Date,
	Mail,
	View,
	Input,
	Github,
	Redirect,
	Validator;

class NovaController extends \BaseController {

	public function index()
	{
		// Set an initial version
		$currentVersion = '2.4.9';

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

	public function awards($type = false)
	{
		$creativityFilePath = base_path('Anodyne/assets/awards-creativity.json');
		$creativityFileContents = file_get_contents($creativityFilePath);

		$presentationFilePath = base_path('Anodyne/assets/awards-presentation.json');
		$presentationFileContents = file_get_contents($presentationFilePath);

		$technicalFilePath = base_path('Anodyne/assets/awards-technical.json');
		$technicalFileContents = file_get_contents($technicalFilePath);

		$winners = [
			'creativity' => json_decode($creativityFileContents, true),
			'technical' => json_decode($technicalFileContents, true),
			'presentation' => json_decode($presentationFileContents, true),
		];

		return View::make('pages.nova.awards', compact('type', 'winners'));
	}

	public function awardNomination()
	{
		$awards = [
			'' => "Please choose an award",
			'Outstanding Creativity' => 'Outstanding Creativity',
			'Outstanding Presentation' => 'Outstanding Presentation',
			'Technical Achievement' => 'Technical Achievement',
		];

		return View::make('pages.nova.award-nomination', compact('awards'));
	}

	public function sendAwardNomination()
	{
		$rules = [
			'name' => 'required',
			'email' => 'required|email',
			'award' => 'required',
			'type' => 'required',
			'recipientName' => 'required_if:type,individual',
			'recipientEmail' => 'email|required_if:type,individual',
			'gameName' => 'required_if:type,game',
			'gameURL' => 'url|required_if:type,game',
		];

		$messages = [
			'name.required' => 'Please enter your name',
			'email.required' => 'Please enter your email address',
			'email.email' => 'A valid email address is required',
			'award.required' => 'Please select an award',
			'type.required' => 'Please choose an award type',
			'recipientName.required_if' => 'Please enter the name of the recipient',
			'recipientEmail.required_if' => 'Please enter the email address of the recipient',
			'recipientEmail.email' => 'A valid email address is required',
			'gameName.required_if' => 'Please enter the name of the game',
			'gameURL.required_if' => 'Please enter the URL of the game',
			'gameURL.url' => 'A valid URL is required',
		];

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// Set the data for the email
		$data = [
			'fromName' => Input::get('name'),
			'fromEmail' => Input::get('email'),
			'type' => Input::get('type'),
			'award' => Input::get('award'),
			'recipientName' => Input::get('recipientName'),
			'recipientEmail' => Input::get('recipientEmail'),
			'gameName' => Input::get('gameName'),
			'gameEmail' => Input::get('gameEmail'),
			'gameURL' => Input::get('gameURL'),
			'reason' => Input::get('reason'),
		];

		// Send the email
		Mail::send('emails.award-nomination', $data, function($msg) use ($data)
		{
			$msg->to('admin@anodyne-productions.com')
				->from($data['fromEmail'], $data['fromName'])
				->subject('Anodyne Award Nomination');
		});

		return Redirect::route('nova.award-nomination')
			->with('flash.level', 'success')
			->with('flash.message', "Thank you for your award nomination! We'll review your nomination and make announcements about award winners on a regular basis.");
	}

}