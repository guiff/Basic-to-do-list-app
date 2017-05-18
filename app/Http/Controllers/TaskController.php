<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    

	public function index() //Affichage de la liste des tâches
	{
		$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));
	}


    public function create() //Affichage du formulaire pour l'ajout d'une tâche
    {
    	return view('formulaire.infos');
    }


    public function store() //Envoi du formulaire d'ajout de tâche
    {

        //On veut que le champ soit rempli
        $this->validate(request(), [ 

            'body' => 'required'

        ]);

        Task::create(request(['body']));

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }


    public function show(Task $task) //Affichage d'une tâche précise
    {
        return view('tasks.show', compact('task'));
    }

}