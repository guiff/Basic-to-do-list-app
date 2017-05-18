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


    public function create()
    {
    	return view('formulaire.infos');
    }

    public function store()
    {

        Task::create(request(['body']));

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }
}