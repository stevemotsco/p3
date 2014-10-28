<?php

class LoremIpsumGenerator {

	public function generateLoremIpsum($quantity) {

		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($quantity);
		return $paragraphs;
	}

}
