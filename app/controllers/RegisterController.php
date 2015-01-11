<?php

class RegisterController extends \BaseController {

	public function create()
	{
		return View::make('register.create');
	}
	public function store()
	{
        $input = Input::only('email', 'password');

        $user = User::create($input);
        $user->save();
        Auth::login($user);
        return Redirect::to('/');
	}
}