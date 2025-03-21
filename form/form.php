<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $name = htmlspecialchars($_POST["name"]);
//     $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
//     $password = $_POST["password"];


//     if (empty($name) || empty($email) || empty($password)) {
//         echo "All fields are required!";
//         exit;
//     }

//     // Hash the password for security
//     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//     // Display success message
//     echo "Thank you, $name! Your email ($email) has been recorded.";
    
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "Thank you, $name! Your email ($email) has been recorded.";
    
}
?>
