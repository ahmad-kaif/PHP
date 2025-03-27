<?php
    // creating a file
    $myfile = fopen("abc.text","w") or die("unable to open file");

    //writing inside a file
    $data = "HTML: Hyper text markup Language";
    fwrite($myfile,$data);



?>