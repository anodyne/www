<?php namespace Anodyne\Controllers;

use App,
	Date,
	Mail,
	View,
	Input,
	Github,
	Session,
	Markdown;

class MainController extends \BaseController {

	public function index()
	{
		// Set an initial version
		$version = '2.3';

		if (App::environment() == 'production')
		{
			// Grab the version
			$version = Github::currentRelease('anodyne', 'nova')['name'];
		}

		return View::make('pages.main.index')
			->withFounding(Date::createFromDate(2005, 4, 15, 'America/New_York'))
			->withVersion($version)
			->withNews(\Wardrobe::posts(['limit' => 5, 'tag' => 'news']));
	}

	public function faqs()
	{
		return View::make('pages.main.faqs');
	}

	public function privacy()
	{
		return View::make('pages.main.privacy');
	}

	public function contact()
	{
		// Set an anti-spam number
		$random = mt_rand(1, 999);

		// Store the number in the session to pass along
		Session::flash('antispam', $random);

		return View::make('partials.contact')->withAntispam($random);
	}

	public function doContact()
	{
		if (Session::get('antispam') == Input::get('antispam'))
		{
			// Set the data for the email
			$data = [
				'subject'	=> Input::get('subject'),
				'name'		=> Input::get('name'),
				'email'		=> Input::get('email'),
				'message'	=> Markdown::parse(Input::get('message')),
			];

			Mail::send('emails.contact', $data, function($msg) use ($data)
			{
				$msg->to(config('anodyne.email.address'), config('anodyne.email.name'))
					->from($data['email'], $data['name'])
					->replyTo($data['email'], $data['name'])
					->subject(config('anodyne.email.subject')." {$data['name']}");
			});
		}
	}

}