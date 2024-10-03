<?php
    //ARITMATIKA GES
    /*
    1. operator aritmatika
    + - * / ** %

    2. incremenr/decrement op
    **, --

    3.OP Precedence
    ()
    **
    * / %
    * - 
    */

    $x = 10;
    $y = 2;
    $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    //$z = $x * $y;
    //$z = $x / $y;
    //$z = $x ** $y;
    $z = $x % $y;

    echo "$z";
    echo "<br>";

    //increment/decrement
    
    $counter = 0;
    $counter++;
    echo $counter;
    echo "<br>";
    $counter--;
    echo $counter;
    
    $hitung = null;
    $hitung = $x ** $y;
    
    echo "<br>";
    echo $hitung;
    echo "<br>";
    
    echo $y * $x, "<br>";
    echo $hitung * $z, "<br>";
    echo $x * $z;

    echo "<br> bagaimana ini ", $z;


    ?>