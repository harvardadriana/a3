<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreCalculatorController extends Controller
{

	/**
	 * 
	 */
	public function __invoke(Request $request) {

		// RETRIEVE INPUTS
    	$word = $request->input('word', null);
    	$bonus = $request->input('bonus', null);
    	$bingo = $request->has('bingo');
    	$score = $request->input('score', null);

	   	if($word) {

    		// GET JSON FILE (TILES.JSON) AND DECODE JSON
    		$tilesJson = file_get_contents(database_path()."/tiles.json");
    		$tiles = json_decode($tilesJson, true);

    		// CONVERT INPUT FROM USER INTO CAPS
			$wordCaps = strtoupper($word);		

			// GET LENGTH OF $word (used to improve efficiency in for loop)
			$length = strlen($wordCaps);

			// CALCULATE/SUM VALUE OF EACH TILE
			for ($i = 0; $i < $length; $i++) {
				$score += ($tiles[$wordCaps[$i]]);
			}

			// CALCULATE BONUS POINT IF APPLICABLE
			if($bonus == "double") {
				$score = $score * 2;
			} 
			else if($bonus == "triple") {
				$score = $score * 3;
			}

			// INCLUDE 50 POINTS "BINGO" IF WORD HAS 7 OR MORE LETTERS
			if(($bingo) && ($length >= 7)) {
				$score += 50;
			}

    	}

		return view('welcome')->with([
    		'word' => $word,
    		'bonus' => $bonus,
    		'bingo' => $request->has('bingo'),
    		'score' => $score
    	]);

    }


/*
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