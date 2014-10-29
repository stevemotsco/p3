<?php

class LoremIpsumController extends BaseController {
	//As of 25 Oct 14: WHEN CALL MADE TO THIS CONTROLLER, THE FUNCTIONALITY DOES NOTHING SO NOT CURRENTLY BEING USED.
	public function generateLoremIpsum() {

		// show empty form if nothing submitted yet
		if (!Input::get('submit')) {
			return View::make('generate-loremipsum');
		}

		// check for valid input from user
		$outputMsg = "";
		$quantity = Input::get('quantity');
		// check that input is a number
		if (!preg_match("/^[0-9]*$/", $quantity)){
			$outputMsg = "Enter a number!";
		}
		// check that input is greater than zero
		elseif ($quantity < 1) {
			$outputMsg = "Number must be greater than zero!";
		}
		// check that input is less than one hundred
		elseif ($quantity > 99) {
			$outputMsg = "Number must be less than 100!";
		}

		return View::make('generate-loremipsum')
				->with('outputMsg', $outputMsg);
		// if input failed validation, return message to user 
		//	if (strlen($outputMsg) = 0) {
		//		return View::make("generate-loremipsum")
		//			->with("outputMsg", $outputMsg);
		//	}


		// new instance of the LoremIpsumGenerator class
		$LIG = new LoremIpsumGenerator();

		// call generateLoremIpsum to create output Lorem Ipsum text
		$outputLoremIpsums = $LIG->generateLoremIpsum(Input::get('quantity'));

		// return Lorem Ipsum text to user 
		return View::make('generate-loremipsum')
			->with('outputLoremIpsums', $outputLoremIpsums);

	}

}
