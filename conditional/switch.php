<?php

    //switch case
    $age = readline("Enter your age:");
    switch($age){
        case 18:
            echo "You are 18 years old";
            break;
        case 19:
            echo "You are 19 years old";
            break;
        case 20:
            echo "You are 20 years old";
            break;
        default:
            echo "You are not 18, 19 or 20 years old";
    }
?>