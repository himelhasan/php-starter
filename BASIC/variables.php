<?php

$name='Bangladesh';
$age = 123;
$myAge="age";

echo "Hello {$name} \nNow you reached an age of  {$myAge}";

$task = "read";
echo $task;
$task = "write";
echo $task; 


// const 

define ("PI", 3.1419);
echo("\n");
echo constant("PI");
echo "\n value of pi".PI;
echo("\n");
echo $constant = "constant";
echo("\n");
echo "the value of pi ={$constant("PI")} ";

// OUTPUT
echo "\n";
echo "hello world";

echo "\n";
$name = "earth";
var_dump($name);
$age = 213;
var_dump($age);
$income= 123.123;
var_dump($income);

$fName ="Himel";
$lName = "Hasan";

var_dump ($fName, $lName);

// Primitive Date types 

/* 
integer -- int
double / float
Boolean  
Null
String
Array
Object
Resource
*/

$name = "Earth";
$uName = strtoupper($name);
echo "We are living on the {$uName}";
printf("\n This is %s %s", $fName, $lName);
printf("\n We are in %s", strtoupper($name));