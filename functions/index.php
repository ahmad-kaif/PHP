
<?php


     // function myText(){
    //     $x = 10;
    //     echo $x;
    // }
    // myText();

    //pass by value
    // function myText($x){
    //     $x += 10;
    //     echo $x;
    // }
    // $y = 10;
    // myText($y);
    // echo "\n$y"; // 10

    //pass by refernce
    // function myText2(&$x){
    //     $x += 10;
    //     echo $x;
    // }
    // $y = 10;
    // myText2($y);
    // echo "\n$y";


    // len of string
    $message = "Hello World!";
    echo "Length of string = " . strlen($message);

    //word count
    echo "\nWord count =" . str_word_count($message) . "\n";

    //reverse string    
    echo "Reverse string = " . strrev($message) . "\n";

    //position of a word
    echo "Position of world = " . strpos($message, "world") . "\n";

    //string to lowercase
    echo "Lowercase = " . strtolower($message) . "\n";

    //string replace
    echo "Replace = " . str_replace("World", "Dolly", $message) . "\n";

    //substring
    echo "Substring = " . substr($message, 6, 5) . "\n";


    //arithmatic operations
    $x = 10;
    $y = 20;
    echo "Addition = " . ($x + $y) . "\n";
    echo "Subtraction = " . ($x - $y) . "\n";
    echo "Multiplication = " . ($x * $y) . "\n";
    echo "Division = " . ($x / $y) . "\n";
    echo "Modulus = " . ($x % $y) . "\n";

    //assignment operators
    $x = 10;    
    echo "Assignment = " . $x . "\n";
    $x += 10;
    echo "Addition = " . $x . "\n";
    $x -= 10;
    echo "Subtraction = " . $x . "\n";
    $x *= 10;
    echo "Multiplication = " . $x . "\n";
    $x /= 10;
    echo "Division = " . $x . "\n";
    $x %= 10;
    echo "Modulus = " . $x . "\n";

    //logical operators
    $x = 10;
    $y = 20;
    echo "AND = " . ($x && $y) . "\n";
    echo "OR = " . ($x || $y) . "\n";
    echo "NOT = " . !$x . "\n";
    echo "XOR = " . ($x xor $y) . "\n";






    

?>