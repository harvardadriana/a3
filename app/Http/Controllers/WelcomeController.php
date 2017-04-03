<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   	/**
	 * GET
	 */
	public function __invoke() {

    	return redirect('/scrabble');
    	
	}
}