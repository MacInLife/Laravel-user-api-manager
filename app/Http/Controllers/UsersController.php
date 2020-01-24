<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //la méthode getInfos qui reçoit l'url http://monsite.fr/users avec le verbe "get" et qui retourne le formulaire,
    public function getInfos()
    {
		return view('infos');
	}
    //la méthode postInfos qui reçoit l'url http://monsite.fr/users avec le verbe "post" et qui traite les entrées.
	public function postInfos(Request $request)
	{
		return 'Le nom est ' . $request->input('nom'); 
	}

}
