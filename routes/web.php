<?php


/**
 * log viewer
 */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


/**
 * a3/public/
 */
Route::get('/{word}/{bonus?}/{calculate?}', 'ScoreCalculatorController@index');


/**
 * a3/public/
 */
Route::get('/', 'WelcomeController');