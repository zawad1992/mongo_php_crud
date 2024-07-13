<?php
require 'db_connection.php';

$filter = ["name" => "John Doe"];

$cursor = $collection->find($filter);

// Iterate through results
foreach ($cursor as $document) {
    echo "Name: ", $document["name"], ", Email: ", $document["email"], PHP_EOL;
}