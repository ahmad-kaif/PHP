<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $skills = isset($_POST['skill']) ? implode(", ", $_POST['skill']) : "None";
    $gender = htmlspecialchars($_POST['gender']);
    
    echo "<h2>Form Data Submitted:</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Programming Skills:</strong> $skills</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>
    <h2>Fill the Form</h2>
    <form method="post" action="">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label>Programming Skills:</label><br>
        <input type="checkbox" name="skill[]" value="C"> C
        <input type="checkbox" name="skill[]" value="C++"> C++
        <input type="checkbox" name="skill[]" value="Java"> Java
        <input type="checkbox" name="skill[]" value="HTML"> HTML
        <input type="checkbox" name="skill[]" value="CSS"> CSS
        <br><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>