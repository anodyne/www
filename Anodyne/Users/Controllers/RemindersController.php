<?php namespace Anodyne\Users\Controllers;

use App,
	Hash,
	Lang,
	View,
	Flash,
	Input,
	Password,
	Redirect,
	BaseController;

class RemindersController extends BaseController {

	public function remind()
	{
		return View::make('pages.password.remind');
	}

	public function doRemind()
	{
		$response = Password::remind(Input::only('email'), function($message)
		{
			$message->subject("[Anodyne Productions] Your Password Reset Link");
		});

		switch ($response)
		{
			case Password::INVALID_USER:
				Flash::error(Lang::get($response));

				return Redirect::back();
			break;

			case Password::REMINDER_SENT:
				Flash::success(Lang::get($response));

				return Redirect::back();
			break;
		}
	}

	public function reset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('pages.password.reset')->with('token', $token);
	}

	public function doReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);

		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password = $password;
			$user->save();
		});

		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			case Password::INVALID_TOKEN:
			case Password::INVALID_USER:
				Flash::error(Lang::get($response));

				return Redirect::back();
			break;

			case Password::PASSWORD_RESET:
				Flash::success("Your password has been reset.");

				return Redirect::to('login');
			break;
		}
	}

}