<?php

//**********print using echo*******
//    echo "Day 23";

//*********print using Function*******
//    function demo()
//    {
//        echo "Hello Yeasin";
//    }
//
//    demo();

//*********** print using class *************
//class prtinting
//{
//    function one()
//    {
//        echo "Hello Yeasin";
//    }
//}
//
//$obj = new prtinting();
//$obj -> one();


    function demo($num1=5,$num2=3)
    {
        $sum = $num1 + $num2;
        echo "The Sum of ".$num1 ." and " .$num2 ." is " .$sum;
    }

//    echo'<br />====================<br />';
//
//    demo(10,20);
//    echo'<br />====================<br />';
//
//    $num1 = 10;
//    $num2 = 20;
//    $sum = $num1 + $num2;
//    echo "The Sum of ".$num1 ." and " .$num2 ." is " .$sum;
demo();
?>
