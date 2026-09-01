<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display Candies</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
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
    <a href="display_candies.php">View Candies</a>
</nav>

<main>
<h2>Available Candies</h2>

<?php
$stmt = $conn->query("SELECT * FROM candies");
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Stock</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$row['candy_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['category']}</td>
            <td>{$row['price']}</td>
            <td>{$row['stock']}</td>
          </tr>";
}

echo "</table>";
?>
</main>

<footer>
<p>&copy; 2026 Candystore</p>
</footer>
</body>
</html>

