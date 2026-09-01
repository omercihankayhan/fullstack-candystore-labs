<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Candy</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <h1>Delete Candy</h1>
</header>

<nav>
    <a href="display_candies.php">View Candies</a>
</nav>

<main>
<h2>Delete Candy</h2>

<form method="POST" action="delete_candy.php">
    Candy ID: <input type="number" name="candy_id"><br><br>
    <input type="submit" value="Delete Candy">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("DELETE FROM candies WHERE candy_id = :candy_id");
    $stmt->execute([':candy_id' => $_POST['candy_id']]);

    echo "<p>Candy deleted successfully!</p>";
}
?>
</main>

<footer>
<p>&copy; 2026 Candystore</p>
</footer>
</body>
</html>

