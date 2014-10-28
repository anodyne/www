<?php namespace Anodyne\Users\Mailers;

use Config;

class UserMailer extends \BaseMailer {

	public function created($user, $data)
	{
		$emailData = [
			'subject' => "User Account Created",
			'replyTo' => Config::get('mail.from.address'),
			'to' => $user->present()->email,
			'email' => $user->present()->email,
			'password' => $data['password'],
		];

		return $this->send('users.created', $emailData);
	}

	public function registered($user)
	{
		$emailData = [
			'subject' => "Welcome to Anodyne Productions",
			'replyTo' => Config::get('mail.from.address'),
			'to' => $user->present()->email,
		];

		return $this->send('users.registered', $emailData);
	}

}