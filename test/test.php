<?php
    $a = array("pen", "pencil");
    $b = array("pen");

    print_r($a);
    echo "<br>";
  
    print_r($b);
    echo "<br>";

    $a = array_merge($a, $b);
    print_r($a);
    echo "<br>";
   

    ?>