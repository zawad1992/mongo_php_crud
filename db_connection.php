<?php
require 'vendor/autoload.php'; // Assuming you have composer

// Replace these with your connection details
$uri = "mongodb://192.168.0.108:27017/?replicaSet=rs0";
$dbName = "mydatabase";
$collectionName = "users";

$client = new MongoDB\Client($uri);
$collection = $client->$dbName->$collectionName;