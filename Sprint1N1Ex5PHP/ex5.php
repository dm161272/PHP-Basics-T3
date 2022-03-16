<?php

/*

- Exercises 5
Create two arrays, one that includes 5 integers, and one that includes 3 integers.

Adds another value to the array that contains 3 integers.
Mix the two arrays and print the resulting array size per screen.
Now screen the resulting array value by value.
Tip: The var_dump () and / or print_r () functions may be useful for viewing the contents of your arrays.

*/

$array_1 = array(1, 2, 3, 4, 5);
$array_2 = array(7, 8, 9);

array_push ($array_2, 55);

$array_res = array_merge ($array_1, $array_2);

echo print_r ($array_res, true) . "<br><br>";

foreach ($array_res as $value) {
    echo $value . " ";
}
