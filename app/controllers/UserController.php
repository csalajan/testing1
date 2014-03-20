<?php

class UserController extends BaseController {

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

	protected $layout = 'layouts.layout';

	public function getRegister() {
		$this->layout->content = View::make('users.register');
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {
	        // validation has passed, save user in DB
	        $user = new User;
		    $user->username = Input::get('username');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
 
    		return Redirect::to('/')->with('message', 'Thanks for registering!')->with('alert', 'success');
	    } else {
	        // validation has failed, display error messages
	        return Redirect::to('users/register')->with('message', 'The following errors occurred', 'alert', 'warning')->withErrors($validator)->withInput();   
	    }
	}

	public function postLogin() {
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
		    return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
		} else {
		    return Redirect::to('/')
		        ->with('message', 'Your username/password combination was incorrect')->with('alert', 'warning')
		        ->withInput();
		}
	}

	public function getLogout() {
		Auth::logout();
    	return Redirect::to('/')->with('message', 'Your are now logged out!')->with('alert', 'success');
	}

	public function getDashboard() {
		$this->layout->content = View::make('users.dashboard');
	}


}