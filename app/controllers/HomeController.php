<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin()
	{
		// show login form
		return View::make('home.login');
	}

	public function doLogin()
	{
		// process the form

		// print_r($_POST);
		// exit();

		$rules = array(
			'email'=>'required:email',
			'password'=>'required|alphaNum:min3'
		);

		$validator = Validator::make(Input::all(), $rules);


		if($validator->fails()){
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else{
			$userdata = array(
				'email' => Input::get('email'),
				'password'=>Input::get('password')
			);

			if(Auth::attempt($userdata)){
				echo 'SUCCESS!';
			}else{
				echo "NO";
				// return Redirect::to('login');
			}
		}
	}

}