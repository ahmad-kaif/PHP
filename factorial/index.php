<?php

function factorial($n) {
    if ($n < 0) {
        return "Error: Factorial is not defined for negative numbers";
    }
    
    if ($n == 0 || $n == 1) {
        return 1;
    }
    else {
        return $n * factorial($n-1);
    }
    
    // $result = 1;
    // for ($i = 2; $i <= $n; $i++) {
    //     $result *= $i;
    // }
    
    // return $result;
}

// Get input from user
echo "Enter a number to calculate its factorial: ";
$input = trim(fgets(STDIN)); // Read from command line


$number = (int)$input;
echo "Factorial of $number is: " . factorial($number) . "\n";


?>
