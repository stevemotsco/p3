<?php

class LoremIpsumGenerator {
	// this class generates the requested number of Lorem Ipsum paragraphs by using an imported package: badcow/lorem-ipsum 
	public function generateLoremIpsum($quantity) {
		// Instantiate a new "Badcow\LoremIpsum" object
		$generator = new Badcow\LoremIpsum\Generator();
		// get the Lorem Ipsum paragraphs and return them
		$paragraphs = $generator->getParagraphs($quantity);
		return $paragraphs;
	}
}
