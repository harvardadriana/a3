<?php


/**
 * log viewer
 */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


/**
 * /scrabble
 */
Route::get('/scrabble', 'ScoreCalculatorController@index');


/**
 * /
 */
Route::get('/', 'WelcomeController');