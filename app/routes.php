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

// Unable to get code in LoremIpsumGenerator.php to function so logic is further down in this file.
// display form to generate new Lorem Ipsum text request using controller to perform logic
//Route::get('/generate-loremipsum', 'LoremIpsumController@generateLoremIpsum');

// display form to generate new request for Lorem Ipsum text 
Route::get('/generate-loremipsum', function() 
{

    // If form has not been submitted yet, just return the view
    if(!Input::get('submit')) {
        return View::make('generate-loremipsum');
    }
    // Instantiate a new "ErrorChecks" object from our ErrorChecks class in /app/classes/ErrorChecks.php
    $EM = new ErrorChecks();
    // return error messages if there are any
    $outputErrorMsg = $EM->checkInput(Input::get('quantity'));
    if (strlen($outputErrorMsg) > 0) {
        return View::make('generate-loremipsum')
            ->with('outputMsg', $outputErrorMsg);
        }

    // If we get this far there were no errors so get the correct number of paragraphs
    // Instantiate a new "LoremIpsumGenerator" object from our LoremIpsumGenerator class in /app/classes/LoremIpsumGenerator.php
    $LIG = new LoremIpsumGenerator();

    // return the appropriate number of Lorem Ipsum paragraphs
    $outputLoremIpsums = $LIG->generateLoremIpsum(Input::get('quantity'));
    return View::make('generate-loremipsum')
        ->with('outputLoremIpsums', $outputLoremIpsums);

});

// display form to generate new request for random user(s) data
Route::get('/generate-user', function() {
/*    //PRODUCTION
    //$view  = '<form method="POST" action="/generate-user" >'; 
    //LOCAL
    $view  = '<form method="POST" action="/p3/public/generate-user" >';
    $view .= 'Title: <input type="text" name="JoBoo">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view; */
    return View::make('generate-user');
});



// display form for new generate user request
//Route::get('/generate-user', function() {
/*    //PRODUCTION
    //$view  = '<form method="POST" action="/generate-user" >'; 
    //LOCAL
    $view  = '<form method="POST" action="/p3/public/generate-user" >';
    $view .= 'Title: <input type="text" name="JoBoo">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view; */
//	return View::make('generate-user');
//});

// Return info for new generate user request
Route::post('/generate-user', function() {
 /*   $input =  Input::all();
    print_r($input);

            return View::make('generate-loremipsum')
            ->with('name','Susan')
            ->with('books', $books);*/

});