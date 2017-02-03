<?php

/*
Hi guys today i will teach u how to create a pyramid in php using
for loop


so lets start

first we need to decide the length of pyramid
 */

$length = 5;

///Step 1
// for ($i=1; $i <= $length ; $i++) { 
// 	echo $i;
// }
// echo "\n";




///Step 2 
// for ($i=1; $i <= $length ; $i++) { 
// 	for ($j=1; $j <= $i ; $j++) { 
// 		echo $j;
// 	}
// 	echo "\n";
// }
// echo "\n";

//Step 3 
// for ($i=1; $i <= $length ; $i++) { 
// 	for ($k=$length-$i; $k >= 1 ; $k--) { 
// 		echo " ";
// 	}

// 	for ($j=1; $j <= $i ; $j++) { 
// 		echo $j;
// 	}

// 	echo "\n";
// }
// echo "\n";



//Step 4 
for ($i=1; $i <= $length ; $i++) { 
	for ($k=$length-$i; $k >= 1 ; $k--) { 
		echo " ";
	}

	for ($j=1; $j <= $i ; $j++) { 
		echo $j;
	}
	for ($h=$i-1; $h >= 1 ; $h--) { 
		echo $h;
	}
	echo "\n";
}
echo "\n";

echo "WE have successfully complete iterating a pyramid using for loop in PHP \n";


echo "Please do subscribe share and like the video\n";


echo "Thanks and Bye \n"



  ?>