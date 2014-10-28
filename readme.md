##### Project3 created by Steve Motsco and initially posted to GitHub on 21Oct14

##### Project URL:  http://p3.stevemotsco.me/

##### Demo URL:  http://screencast.com/????????????????????????\

##### This project contains a Lorem Ipsum generator that produces scrambled Latin text to act as placeholder dummy text.  It also contains a Random User generator that produces data on ficticious users for testing an application.

##### To generate the Lorem Ipsum text I imported a PHP package, badcow/lorem-ipsum, which can be found at: https://packagist.org/packages/badcow/lorem-ipsum and https://github.com/samuelwilliams/LoremIpsum.

##### To generate the Random User data I imported a PHP package, fzaninotto/faker, which can be found at: https://packagist.org/packages/fzaninotto/faker and https://github.com/fzaninotto/Faker.

##### Got a late start on this project due to other commitments in life, so I plan on using my "One Free Late Pass" for this project.

##### I ran into issues accessing classes I created in the folder app\classes.  In composer.json I added the following to the autoload code: "app/classes", but I was still unable to assecc the classes.  So, I put the classes in app/controllers and it worked.

##### I ran into issues getting code I put in a controller I created, LoremIpsumGenerator.php, to function.  I ended up moving the logic I put in this controller directly into the routes.php file.

