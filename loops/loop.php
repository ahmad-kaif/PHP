<?php
    //for loop
    for($i=0 ; $i<=4 ; $i++){
        echo "For - The number is: $i \n";
    }

    //while loop
    $i=0;
    while($i<=4){
        echo "While - The number is: $i \n";
        $i++;
    }

    //do while
    $i=0;
    do{
        echo "Do While - The number is: $i \n";
        $i++;
    }while($i<=4);


    // for each
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $x) {
        echo "For Each - The color is: $x \n";
    }
?>