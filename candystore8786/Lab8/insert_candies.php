<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Candy</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <h1>Add New Candy</h1>
</header>

<nav>
    <a href="index.html">About Us</a>
    <a href="display_candies.php">View Candies</a>
</nav>

<main>
<h2>Add Candy</h2>

<form method="POST" action="insert_candies.php">
    Name: <input type="text" name="name"><br><br>
    Category: <input type="text" name="category"><br><br>
    Price: <input type="float" name="price"><br><br>
    Stock: <input type="number" name="stock"><br><br>
    <input type="submit" value="Add Candy">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare(
        "INSERT INTO candies (name, category, price, stock)
         VALUES (:name, :category, :price, :stock)"
    );

    $stmt->execute([
        ':name' => $_POST['name'],
        ':category' => $_POST['category'],
        ':price' => $_POST['price'],
        ':stock' => $_POST['stock']
    ]);

    echo "<p>Candy added successfully!</p>";
}
?>
</main>

<footer>
<p>&copy; 2026 Candystore</p>
</footer>
</body>
</html>

