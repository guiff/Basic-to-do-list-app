<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getInfos()
    {
    	return view('formulaire.infos');
    }

    public function postInfos(Request $request)
    {
    	//Il faut réussir à envoyer ça dans la bdd
    }
}
