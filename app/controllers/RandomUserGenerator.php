<?php

class RandomUserGenerator {
	// this class generates the requested number of Lorem Ipsum paragraphs by using an imported package: badcow/lorem-ipsum 
	public function generateRandomUsers($quantity) {
		// Instantiate a new "Faker" object
		$faker = Faker\Factory::create();
		// declare array to hold all users' info
		$users = array();
		// array to hold one user's info
		for ($i = 0; $i < $quantity; $i++) {
			$oneUser = array(
				'name' => $faker->name,
				'bday' => $faker->dateTimeThisCentury->format('m/d/y'),
				'phone' => $faker->phonenumber,
				'email' => $faker->email,
				'address' => $faker->address
			); 
		// add array to an array of arrays
		array_push($users, $oneUser);
		}
		return $users;
	}
}

