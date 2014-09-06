<?php namespace Anodyne\Users\Events;

use UserMailer as Mailer;
use UserRepositoryInterface;

class UserEventHandler {

	protected $users;
	protected $mailer;

	public function __construct(Mailer $mailer, UserRepositoryInterface $users)
	{
		$this->users = $users;
		$this->mailer = $mailer;
	}

	public function onCreate($userId, $input)
	{
		// Get the user
		$user = $this->users->find($userId);

		// Generate a password for the user
		$input['password'] = \Str::random(8);

		// Update the user
		$user->update(['password' => $input['password']]);

		// Send a welcome email to the user
		$this->mailer->created($user, $input);
	}

	public function onDelete($userId)
	{
		//
	}

	public function onRegister($userId)
	{
		// Get the user
		$user = $this->users->find($userId);

		// Send a welcome email to the user
		$this->mailer->registered($user);
	}

	public function onUpdate($userId, $input)
	{
		//
	}

}