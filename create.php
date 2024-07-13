<?php
require 'db_connection.php';


$newUserData = [];
if(!empty($_POST)) {
    $name = (!empty($_POST['name'])) ? $_POST['name'] : '';
    $email = (!empty($_POST['email'])) ? $_POST['email'] : '';
    $age = (!empty($_POST['age'])) ? $_POST['age'] : 0;

    $newUserData['name'] = $name;
    $newUserData['email'] = $email;
    $newUserData['age'] = $age;
} else {
    $faker = Faker\Factory::create();

    $newUserData['name'] = $faker->name();
    $newUserData['email'] = $faker->email();
    $newUserData['age'] = rand(1,70);
}

$insertResult = $collection->insertOne($newUserData);

$insertedId = $insertResult->getInsertedId();

echo "Inserted document with ID: ", $insertedId, PHP_EOL;