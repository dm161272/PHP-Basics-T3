<?php

/*

Declare two variables X and Y of type int, two variables N and M of type double, 
and assign each a value. Here's a screen shot for X and Y:

The value of each variable
The sum
The rest
The product
The module
For N and M you will do the same.

For all variables X, Y, N, M

Twice each variable
The sum of all the variables
The product of all the variables

*/


$int_x = 37;
$int_y = 25;

$double_n = 525.555;
$double_m = 225.767;

echo "Value of <b>x</b>: $int_x <br>";
echo "Value of <b>y</b>: $int_y <br>";
echo "Value of <b>n</b>: $double_n <br>";
echo "Value of <b>m</b></b>: $double_m <br>";

echo "<br>";

echo "$int_x + $int_y = " . $int_x + $int_y . "<br>";
echo "$int_x - $int_y = " . $int_x - $int_y . "<br>";
echo "$int_x * $int_y = " . $int_x * $int_y . "<br>";
echo "$int_x % $int_y = " . $int_x % $int_y . "<br>";

echo "<br>";

echo "$double_n + $double_m = " . $double_n + $double_m . "<br>";
echo "$double_n - $double_m = " . $double_n - $double_m . "<br>";
echo "$double_n * $double_m = " . $double_n * $double_m . "<br>";
echo "$double_n % $double_m = " . floor($double_n) % floor($double_m) . "<br>";

echo "<br>";

echo "$int_x ** 2 = " . $int_x**2 . "<br>";
echo "$int_y ** 2 = " . $int_y**2 . "<br>";

echo "<br>";

echo "$double_n ** 2 = " . $double_n**2 . "<br>";
echo "$double_m ** 2 = " . $double_m**2 . "<br>";

echo "<br>";

echo "$int_x + $int_y + $double_n + $double_m = " . $int_x + $int_y + $double_n + $double_m . "<br>";

echo "<br>";

echo "$int_x * $int_y * $double_n * $double_m = " . $int_x * $int_y * $double_n * $double_m . "<br>";