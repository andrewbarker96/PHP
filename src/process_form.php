<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    try {
        // Connect to SQLite database
        $db = new PDO('sqlite:user.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if user already exists
        $stmt = $db->prepare('SELECT * FROM user WHERE name = ? AND email = ?');
        $stmt->execute([$name, $email]);
        $user = $stmt->fetch();

        if ($user) {
            echo "<script>alert('User already exists.');</script>";
        } else {
            // Insert data into the contacts table
            $stmt = $db->prepare('INSERT INTO user(name, email) VALUES (?, ?)');
            $stmt->execute([$name, $email]);

            echo "<script>alert('Form submitted successfully.');</script>";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    echo "Invalid request.";
}
?>