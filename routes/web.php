<?php


/**
 * log viewer
 */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


/**
 * a3/
 */
Route::get('/', 'ScoreCalculatorController');