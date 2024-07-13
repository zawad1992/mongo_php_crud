<?php
require 'db_connection.php';


$faker = Faker\Factory::create();

$newUserData = [
    "name" => $faker->name(),
    "email" => $faker->email(),
    "age" => rand(1,70)
];

$insertResult = $collection->insertOne($newUserData);

$insertedId = $insertResult->getInsertedId();

echo "Inserted document with ID: ", $insertedId, PHP_EOL;