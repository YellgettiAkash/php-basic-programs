<?php

/*


Hi guys today i will teach u how to swap two numbers in php using
third variable and also without using third variable

previously i taught you create a pyramid in php using for loop 

so lets start

let $a = 5 ; and $b = 6;
*/

$a =5;
$b =6;

echo " a = $a and b = $b";

echo "\n"; 

//this is using third variable 
// let $temp be the third variable
// $temp = 0;

// $temp = $a;
// //in above eqn value of $a is give to $temp

// $a = $b;
// //in above eqn value of $b is give to $a

// $b = $temp;
// //in above eqn value of $b is give to $a

// echo " a = $a and b = $b";

// echo "\n";


//this is without using third variable

//addition and subtraction
// $a = $a+$b;
// $b = $a-$b;
// $a = $a-$b;

// echo " a = $a and b = $b";
// echo "\n";

//multiply and Divide
// $a = $a*$b;
// $b = $a/$b;
// $a = $a/$b;

// echo " a = $a and b = $b";
// echo "\n";



//XOR Bitwise Operator
$a = $a^$b;
$b = $a^$b;
$a = $a^$b;

echo " a = $a and b = $b";
echo "\n";

// echo "\n";

echo "WE have successfully completed swaping number in PHP \n";


echo "Please do subscribe share and like the video\n";


echo "Thanks and Bye \n";
