<?php
    function isPrime($n) {
        if ($n < 2) {
            return false;
        }
        
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    echo isPrime(7) ? "7 is a prime number" : "7 is not a prime number";

?>