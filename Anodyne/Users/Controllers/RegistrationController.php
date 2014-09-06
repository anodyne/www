<?php namespace Anodyne\Users\Controllers;

use Flash,
	Input,
	Session,
	Redirect,
	UserRepositoryInterface;

class RegistrationController extends \BaseController {

	protected $users;

	public function __construct(UserRepositoryInterface $users)
	{
		parent::__construct();

		$this->users = $users;
	}

	public function register()
	{
		// Generate a random number
		$random = mt_rand(1, 999);

		// Put the number into the session
		Session::flash('confirmNumber', $random);

		return \View::make('pages.register')->withConfirmNumber($random);
	}

	public function doRegistration()
	{
		// Setup the validator
		$validator = \Validator::make(Input::all(), [
			'name'				=> 'required',
			'email'				=> 'required|email|unique:users,email',
			'password'			=> 'required',
			'password_confirm'	=> 'required|same:password',
			'confirm'			=> 'required'
		], [
			'email.unique'		=> "The email address you entered is already registered. You can <a href='".route('home')."'>log in</a>, or, if you've forgotten your password, you can reset it from the <a href='".route('password.remind')."'>Reset Password</a> page.",
		]);

		if ( ! $validator->passes())
		{
			// Set the flash message
			Flash::error("Your information couldn't be validated. Please correct the issue(s) and try again.");

			return Redirect::route('register')
				->withInput()
				->withErrors($validator->errors());
		}

		// Make sure the confirmation number matches
		if (Input::get('confirm') != Session::get('confirmNumber'))
		{
			// Set the flash message
			Flash::error("Registration failed due to incorrect anti-spam confirmation number. Please try again.");

			return Redirect::route('register');
		}

		// Create the user
		$user = $this->users->create(Input::all());

		if ($user)
		{
			// Log the user in
			\Auth::login($user, true);

			// Fire the registration event
			\Event::fire('user.registered', [$user->id, Input::all()]);

			// Set the flash message
			Flash::success("Congratulations! You've successfully registered your AnodyneID.");

			return Redirect::route('home');
		}
		else
		{
			// Set the flash message
			Flash::error("There was an error creating your account. Please try again.");

			return Redirect::route('register')->withInput();
		}
	}

}