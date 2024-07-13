<?php
require 'db_connection.php';

$deleteFilter = ["_id" => $insertedId];

$deleteResult = $collection->deleteOne($deleteFilter);

echo "Deleted documents: ", $deleteResult->getDeletedCount(), PHP_EOL;
