<?php
require 'db_connection.php';

$filter = ["_id" => $insertedId]; // Assuming we want to update the document we just inserted

$updateData = [
    '$set' => [
        "age" => 35
    ]
];

$updateResult = $collection->updateOne($filter, $updateData);

echo "Updated documents: ", $updateResult->getMatchedCount(), PHP_EOL;
