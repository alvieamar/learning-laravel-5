<?php

namespace App\Http\Controllers;

/**
 * Basic Controller
 */
class WelcomeController extends Controller 
{
	public function index() 
	{
		return view('welcome');
	}

	public function contact() 
	{
		return view('pages.contact');
	}
} 