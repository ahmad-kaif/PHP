<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP in HTML</title>
</head>
<body>
  <h1>Welcome to My Website</h1>

  <p>Today's date is: 
    <?php 
      echo date("l, F j, Y"); 
    ?>
  </p>

  <?php
    $name = "Traveler";
    echo "<p>Hello, $name! Hope you enjoy your stay.</p>";
  ?>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> My Website</p>
  </footer>
</body>
</html>
