<?php

		Route::bind('task', function($value, $route){
			return Item::where('id', $value)->first();
			});
		//Index 
		Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'))->before('auth');
		Route::post('/', array('uses'=> 'HomeController@postIndex'))->before('csrf');
		Route::get('/credits', array('as' => 'credits', 'uses' => 'HomeController@getCredits'))->before('auth');
		//Rajouter une tâches
		Route::get('/new', array('as'=> 'new', 'uses' => 'HomeController@getNew'));
		Route::post('/new', array('uses' => 'HomeController@postNew'))->before('csrf');
		//Suppression des tâches
		Route::get('/delete/{task}', array('as' => 'delete', 'uses' => 'HomeController@getDelete'));
		//Login
		Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'))->before('guest');
		Route::post('login', array('uses' => 'AuthController@postLogin'))->before('csrf');
		//Register
		Route::get('/register', array('as' => 'register', 'uses' => 'AuthController@getRegister'));
		Route::post('register', array('uses' =>'AuthController@postRegister'));
