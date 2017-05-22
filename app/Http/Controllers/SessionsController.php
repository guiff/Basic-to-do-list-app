<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class SessionsController extends Controller
{
    

    public function __construct()
    {
    	$this->middleware('guest', ['except' => 'destroy']);
    }


    public function create()
    {
    	return view('sessions.create');
    }


    public function store()
    {
		
		//Si on n'arrive pas à authentifier l'utillisateur   	
    	if (! auth()->attempt(request(['email', 'password'])))
    	{
    		return back()->withErrors(['message' => 'Identifiant ou mot de passe incorrect.']);
    	}


        $tasks = auth()->user()->tasks;

    	return view('tasks.index', compact('tasks'));
    }


    public function destroy()
    {
    	auth()->logout();

    	return view('home');
    }


    
}
