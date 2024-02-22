<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client('mongodb+srv://andrewbarker96:DW6jLe10csC3g7wA@cluster0.5646wb0.mongodb.net/?retryWrites=true&w=majority 
');
$database = $client->selectDatabase('PHP'); // Replace with your actual database name
$collection = $database->selectCollection('PHP-Test'); // Replace with your actual collection name

// Insert a document
$result = $collection->insertOne(['key' => 'value']);

// Find documents
$cursor = $collection->find(['key' => 'value']);
foreach ($cursor as $document) {
    var_dump($document);
}

try {
    // MongoDB operations
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Error: " . $e->getMessage();
}
$client->close();
?>
