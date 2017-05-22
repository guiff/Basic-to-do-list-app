<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    

    public function __construct() //L'accès se fait uniquement si l'utilisateur est connecté
    {
        $this->middleware('auth');
    }

	public function index() //Affichage de la liste des tâches
	{

        $tasks = auth()->user()->tasks;

    	return view('tasks.index', compact('tasks'));
	}


    public function create() //Affichage du formulaire pour l'ajout d'une tâche
    {
    	return view('formulaire.infos');
    }


    public function store() //Envoi du formulaire d'ajout de tâche
    {

        $this->validate(request(), ['body' => 'required']); //On veut que le champ soit rempli


        auth()->user()->publish(

            new Task(request(['body']))

        );
        

        $tasks = auth()->user()->tasks;

        return view('tasks.index', compact('tasks'));
    }


    public function show(Task $task) //Affichage d'une tâche précise
    {
        return view('tasks.show', compact('task'));
    }

}