<?php
    include 'header.php';

    // Create SQLite connection
    $db = new PDO('sqlite:path/to/your/database.db');

    // Query to retrieve all data from the user table
    $stmt = $db->query('SELECT * FROM user');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close the database connection
    $db = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="submissions.php">Submissions</a></li> <!-- Add a link to the new page -->
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>Submissions</h2>
            <?php
                // Display submissions in a table
                if (!empty($results)) {
                    echo '<table>';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Name</th>';
                    echo '<th>Email</th>';
                    echo '<th>Message</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    foreach ($results as $row) {
                        echo '<tr>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['message'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p>No submissions yet.</p>';
                }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
    </footer>
</body>
</html>
