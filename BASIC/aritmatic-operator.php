<?php
$number = 12;
$number2 = $number + 2;
$number3 = $number2 / $number;
$number++;
$number--;
$fName ="Himel";
$lName = "Hasan";
$n = 12;
$o = 012;
$h = 0x2B;
$n = 42.234234;


echo "$number \n $number2  \n $number3";
echo ("\n");
printf("\n The number is  %d and %d %d \n" , $n , $o, $h );
echo ("\n");
printf("His name is %s %s \n" ,$fName, $lName);
echo ("\n");
printf('His name is %2$s %1$s ', $fName , $lName);
echo ("\n");
printf('His name is %1$s %1$s', $fName );
echo ("\n");


$output = sprintf("My name is %s %s", $fName, $lName);
echo ("\n");
echo $output;