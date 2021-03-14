<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;

class Testcontroller extends Controller
{
    
    public function index()
    {
    	$categories = Categorie::all();


    	//$categories = "Bonjour mes amis";
    return view('test')->with('categories',	$categories );
    }


    public function mescategories()
    {
    	$categories = Categorie::orderBy('nom','ASC')->get();
    	
    	return view('bienvenue')->with('categories',$categories);
    }

    public function creationcategorie()
    {
    	return view('categories.creation');
    }

    public function enregistrer(Request $request)
    {
        // validation du formulaire
        $request->validate([
            'nom' => 'required|min:2|max:50|string|unique:categories',
    
        ]);
    	
    	$categ = new Categorie();

    	$categ->nom = $request->nom;
    	
    	$categ->save();

        return redirect()->route('index')->with('message','enregistrement effectué');
    	
    }


    public function detail($id)
    {
        $categorie = Categorie::find($id);

     return view('detail')->with('categorie',$categorie);

    }


    public function supprimer($id)
    {
        $categorie = Categorie::find($id);


        $categorie->delete();

         return redirect()->route('index')->with('messagedelete','Suppression effectuée');
    }


    public function modifier($id)
    {
        $categorie = Categorie::find($id);

        return view('modifier')->with('categorie',$categorie);
    }


    public function modification(Request $request,$id)
    {
        
       $categorie = Categorie::find($id);
       
       $categorie->nom = $request->nom;

       $categorie->save();

        return redirect()->route('index')->with('message','Modification effectuée avec succes');

        
    }
}






