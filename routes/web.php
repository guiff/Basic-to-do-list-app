<?php

//Page d'accueil

Route::get('/', function () {

    return view('home');
    
});


//Gestion des tâches

Route::get('/tasks', 'TaskController@index'); //Affichage de la liste des tâches

Route::get('/form', 'TaskController@create'); //Affichage du formulaire pour l'ajout d'une tâche

Route::post('/form', 'TaskController@store'); //Envoi du formulaire d'ajout de tâche

Route::get('/tasks/{task}', 'TaskController@show'); //Affichage d'une tâche précise


//Inscription et connexion

Route::get('/register', 'RegistrationController@create'); //Inscription

Route::post('/register', 'RegistrationController@store'); //Envoi du formulaire d'inscription

Route::get('/login', 'SessionsController@create'); //Accès à la page de connexion

Route::post('/login', 'SessionsController@store'); //Envoi du formulaire de connexion

Route::get('/logout', 'SessionsController@destroy'); //Déconnexion