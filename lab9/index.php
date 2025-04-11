<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="process_form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="course">Course:</label>
        <input type="text" name="course" required><br><br>

        <label for="ph_no">Phone Number:</label>
        <input type="text" name="ph_no" required><br><br>

        <label for="address">Address:</label>
        <textarea name="address" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
