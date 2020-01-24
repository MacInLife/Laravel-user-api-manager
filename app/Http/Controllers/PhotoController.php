<?php 

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
//Avec Photo Gestion
use App\Gestion\PhotoGestion;
use App\Gestion\PhotoGestionInterface;

class PhotoController extends Controller 
{
    public function getForm()
	{
		return view('photo');
	}

    //Avec photoGestion
    public function postForm(
		ImagesRequest $request,
		PhotoGestionInterface $photogestion)
	{

		if($photogestion->save($request->file('image'))) {
			return view('photo_ok');
		} 
		return redirect('photo')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');
	
    }
    
    //Sans photo Gestion
	// public function postForm(ImagesRequest $request)
	// {
	// 	$image = $request->file('image');

	// 	if($image->isValid())
	// 	{
	// 		$chemin = config('images.path');

	// 		$extension = $image->getClientOriginalExtension();

	// 		do {
	// 			$nom = str_random(10) . '.' . $extension;
	// 		} while(file_exists($chemin . '/' . $nom));

	// 		if($image->move($chemin, $nom)) {
	// 			return view('photo_ok');
	// 		}
	// 	}

	// 	return redirect('photo')
	// 		->with('error','Désolé mais votre image ne peut pas être envoyée !');
	// }

}



	
	
