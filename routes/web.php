<?php


Route::get('/', 'WelcomeController');


# only display logs in local environment
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}