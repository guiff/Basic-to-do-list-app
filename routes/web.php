<?php

Route::get('/tasks', 'TaskController@index');

Route::get('/form', 'TaskController@create');

Route::post('/form', 'TaskController@store');