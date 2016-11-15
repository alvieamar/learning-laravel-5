<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about() 
    {
    	$first = 'Fox';
    	$last = 'lazy';

    	return view('pages.about', compact('first', 'last'));
    }
}
