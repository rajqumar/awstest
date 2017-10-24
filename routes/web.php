<?php

Route::get('/', function(){
	return view('posts');
});

Route::get('home', function(){
	return response('Hello World', 200)->header('Content-type', 'text/plain');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');


?>