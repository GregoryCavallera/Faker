<?php
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('fr_FR');

for ($i=0; $i < 10; $i++) {
    echo $faker->name, "</br>";
}