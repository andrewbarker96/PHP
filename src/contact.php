
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
<body>
    <h2>Sign up for our newsletter</h2>
    <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <br />
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <br />
        <input type="submit" value="Submit">
    </form>
</body>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
</footer>
</html>