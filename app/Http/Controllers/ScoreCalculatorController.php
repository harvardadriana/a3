<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreCalculatorController extends Controller
{
    //
    public function index(){
    	dump('Score Calculator Controller works!!!');
    }


/*

	require('Form.php');
	require('Scrabble.php');

	use DWA\Form;


	// INSTANTIATE NEW OBJECTS/CLASSES
	$form = new Form($_GET);
	$scrabble = new Scrabble('tiles.js');


	// VALUES: get user inputs from Form
	$word = $form->get('word', '');
	$bonus = $form->get('bonus', '');
	$bingo = $form->isChosen('bingo');


	if($form->isSubmitted()) {

		$word = $form->sanitize($word);

		// VALIDATION: check for required field and letters only
		$errors = $form->validate([
			'word' => 'required|alpha',
		]);


		// IF VALIDATION IS PASSED...
		if(empty($errors)) {

			// CALCULATE THE SCORE
			$results = $scrabble->getScore($word, $bonus, $bingo);

		}

	}
*/





}
