<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    

    public function monProfil()
    {
    	return view('welcome');
    }
}
