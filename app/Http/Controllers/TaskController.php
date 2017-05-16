<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    
	public function index()
	{
		$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));
	}


    public function getInfos()
    {
    	return view('formulaire.infos');
    }

    public function postInfos(Request $request)
    {
    	//Il faut réussir à envoyer ça dans la bdd
    }
}
