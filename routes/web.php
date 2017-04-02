<?php


/**
 * log viewer
 */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


/**
 * a3/scrabble
 */
Route::get('/scrabble', 'ScoreCalculatorController');


/**
 * a3/
 */
Route::get('/', 'welcomeController');