<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Candy</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <h1>Update Candy</h1>
</header>

<nav>
    <a href="display_candies.php">View Candies</a>
</nav>

<main>
<h2>Update Candy</h2>

<form method="POST" action="update_candy.php">
    Candy ID: <input type="number" name="candy_id"><br><br>
    New Price: <input type="float" name="price"><br><br>
    New Stock: <input type="number" name="stock"><br><br>
    <input type="submit" value="Update Candy">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare(
        "UPDATE candies SET price = :price, stock = :stock WHERE candy_id = :candy_id"
    );

    $stmt->execute([
        ':price' => $_POST['price'],
        ':stock' => $_POST['stock'],
        ':candy_id' => $_POST['candy_id']
    ]);

    echo "<p>Candy updated successfully!</p>";
}
?>
</main>

<footer>
<p>&copy; 2026 Candystore</p>
</footer>
</body>
</html>

