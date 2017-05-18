<?php

Route::get('/tasks', 'TaskController@index'); //Affichage de la liste des tâches

Route::get('/form', 'TaskController@create'); //Affichage du formulaire pour l'ajout d'une tâche

Route::post('/form', 'TaskController@store'); //Envoi du formulaire d'ajout de tâche

Route::get('/tasks/{task}', 'TaskController@show'); //Affichage d'une tâche précise