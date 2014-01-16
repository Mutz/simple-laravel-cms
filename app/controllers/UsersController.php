<?php

class UsersController extends BaseController {

	public function login($value='')
	{
		$userdata = array(
			 'email' 	=> Input::get('email'),
			 'password' => Input::get('password'),
			 );

		if ( Auth::attempt($userdata)) {return Redirect::intended('dashboard');}
		 else {return Redirect::to('/login')->withInput(Input::except('password'));}
	}
}