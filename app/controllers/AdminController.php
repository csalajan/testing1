<?php

class AdminController extends BaseController {

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

	public function __construct() {
		$this->beforeFilter('admin');
	}

	public function getUseradmin() {
		$users = User::all();
		$this->layout->content = View::make('admin.users')->with('users', $users);
		
	}

}