<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

	public function doLogin()
	{
		$rules = array(
			'email' => 'required|email', //Email Validator as requested
			'password' => 'required|alphaNum|min:3' //Aplha Numeric and minimum three so magic would work fine
		);
	}
	if($validator->fails()){
		return Redirect::to('login')
			->withErrors($validator) Send back errors to the login form and display
			->withInput(Input::export('password'));//Send backk all but password to repopulate the form for reattempting login
	}
	else{
		$userInfo = array(
			'email'	=> Input::get('email'),
			'password'	=>	get ('password')
		);
		
	if(Auth::attempt($userInfo)) {
	echo " Hello Hello Group You have successfully loged in. You may convert";
	}
	else{
		return Redirect:to('login');
	}
	
	}
	
	public function doLogout()
	{
		Auth::logout();// Plain logout really
		return Redirect::to('login');
		
	
	}
	
	
	public function showWelcome()
	{
		$data['page_title'] = 'Welcome to Hello Group Currency Convertion';
		return View::make('home', $data);
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
