<?php

class AuthController extends BaseController {

	//Affichage de la view
	public function getLogin()
	{
		return View::make('login');
	}
	//Login
	public function postLogin()
	{
		$rules = array('username' => 'required', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('login')->withErrors($validator);
		}


		$auth = Auth::attempt(array(
			'name' => Input::get('username'),
			'password' => Input::get('password')
			), false);

		if (!$auth) {

			return Redirect::route('login')->withErrors(array('Identifiants invalides.'));
		}

		return Redirect::route('home');
	}
	//Affichage de la view
	public function getRegister()
	{
		return View::make('register');
	}
	//Register
	public function postRegister()
	{
		
		$rules = array('username' => 'required', 'password' => 'required');
	    $validator = Validator::make(Input::all(), $rules);
	    if ($validator->fails()) {
			return Redirect::route('register')->withErrors($validator);
			}
		$user = New User();
		$user->name = Input::get('username');
	    $user->password = Hash::make(Input::get('password'));
	    $user->save();

	   if (!$user) {

			return Redirect::route('register')->withErrors(array('Identifiants invalides.'));
		}

		return Redirect::route('login');
	}

}
