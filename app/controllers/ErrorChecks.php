<?php

class ErrorChecks {
	// checks for non-integer inputs and numbers not between 1-99
	public function checkInput($quantity) {
		$outputMsg = "";
		// check that input is a number
		if (!preg_match("/^[0-9]*$/", $quantity)){
			$outputMsg = "Please enter a valid number between 0 and 99!";
		}
		// check that input is greater than zero
		elseif ($quantity < 1) {
			$outputMsg = "The number entered must be greater than zero! Please try again.";
		}
		// check that input is less than one hundred
		elseif ($quantity > 99) {
			$outputMsg = "The number must be less than 100! Please try again.";
		}
		return $outputMsg;
	}
}