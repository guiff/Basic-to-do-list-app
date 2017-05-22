<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Task;


class RegistrationController extends Controller
{
    
    public function create()
    {
    	return view('registration.create');
    }


    public function store()
    {
    	
    	//Validation du formulaire : on veut que les champs soient remplis

    	$this->validate(request(), [
    	'name' => 'required',
    	'email' => 'required|email',
    	'password' => 'required|confirmed'
    	]);


    	//Création de l'utilisateur

    	$user = User::create([ 
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
        ]);


    	//On connecte l'utiliasteur

    	auth()->login($user);


    	//On le redirige vers sa to do list

        $tasks = auth()->user()->tasks;

    	return view('tasks.index', compact('tasks'));
    }
}
