<?php
    // PHP Code at the top
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? "";
    } else {
        $name = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullstack Form</title>
</head>
<body>
    <div class="box">
        <form action="index.php" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($name) ?>" required>
            <button type="submit">Submit</button>
        </form>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Submitted Name:</h2>";
            echo "<p>" . htmlspecialchars($name) . "</p>";
        }
    ?>
</body>
</html>
