<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //Méthode index
    public function index()
	{
		return view('welcome');
	}
}
