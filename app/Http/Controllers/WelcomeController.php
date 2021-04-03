<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;
use App\Models\Produit;
class WelcomeController extends Controller
{
    

    public function monProfil()
    {
    	return view('welcome');
    }

    public function welcome()
    {
    	
	$categories = Categorie::all();

    $produits = Produit::orderBy('prix','ASC')->get();
	return view('welcome',compact('categories','produits'));
    }

    public function detailproduit($id)
    {
        $produit = Produit::find($id);

        return view('detailproduit')->with('produit',$produit);
    }

    public function detailcategorie($id)
    {
        $categorie = Categorie::find($id);
        return view('detailcategorie',compact('categorie'));
    }
}
