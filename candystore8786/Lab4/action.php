<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Submission Result</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<header>
    <h1>CandyStore</h1>
</header>

<nav>
    <a href="index.html">About Us</a>
    <a href="products.html">Products</a>
    <a href="menu.html">Menu</a>
    <a href="contact.html">Contact Us</a>
    <a href="js1.html">JS Validation</a>
</nav>

<main>
    <h2>Form Submission Result</h2>

    <?php
        $fname = $_POST["fname"];
        echo "<p>Welcome, <strong>" . htmlspecialchars($fname) . "</strong>!</p>";
    ?>
</main>

<footer>
    <p>&copy; 2026 Candystore by Omer Kayhan</p>
</footer>
</body>
</html>

