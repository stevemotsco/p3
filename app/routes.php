<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Homepage
Route::get('/', function() {
	    return View::make('index');
});

//Route::get('/testing', function() {
//	return 'this is only a test';
//});

// display form to generate new Lorem Ipsum text request
Route::get('/generate-loremipsum', function() {
    //PRODUCTION
    //$view  = '<form method="POST" action="/generate-loremipsum" >'; 
    //LOCAL
    $view  = '<form method="POST" action="/p3/public/generate-loremipsum" >';
    $view .= 'Title: <input type="text" name="JoBoo">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;
});

// Return text of new Lorem Ipsum request
Route::post('/generate-loremipsum', function() {
    $input =  Input::all();
    print_r($input);
});

// display form for new generate user request
Route::get('/generate-user', function() {
    //PRODUCTION
    //$view  = '<form method="POST" action="/generate-user" >'; 
    //LOCAL
    $view  = '<form method="POST" action="/p3/public/generate-user" >';
    $view .= 'Title: <input type="text" name="JoBoo">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;
});

// Return info for new generate user request
Route::post('/generate-user', function() {
    $input =  Input::all();
    print_r($input);
});