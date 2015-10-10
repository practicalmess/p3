<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rewrite 'welcome' view to point to master template extended by index template

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function() {
	return view('welcome');
});

Route::get('/lorem', 'LoremController@getOptions');
Route::post('/lorem', 'LoremController@postGenerate');

Route::get('/lorem-test/{number}', function($number) {
	$lipsum = new joshtronic\LoremIpsum();
	return $lipsum->paragraphs($number);
});

Route::get('/random-users', 'UsersController@getOptions');
Route::post('/random-users', 'UsersController@postGenerate');

?>