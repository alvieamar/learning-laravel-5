<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller 
{
	public function index() 
	{
		return 'hello world!';
		// return view('welcome');
	}

	public function contact() 
	{
		return 'Contact me';
	}
}