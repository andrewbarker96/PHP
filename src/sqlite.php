<?php
// Create SQLite database and table

try {
    $db = new PDO('sqlite:user.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table
    $db->exec('CREATE TABLE IF NOT EXISTS user (
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT
    )');

    echo "Database and table created successfully.";
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>