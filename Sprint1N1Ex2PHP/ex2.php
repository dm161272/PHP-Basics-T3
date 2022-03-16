<?php

/*
Screen printing "Hello, World!" using a variable. After

Convert all characters in the string to uppercase and print on the screen.
Prints the size (length) of the variable on the screen.
Prints the string in reverse order of characters on the screen.
Create a new variable with the content "This is the PHP course" and print the concatenation
of both strings on the screen.
*/


$hello = "Hello, World!";
$text = "This is the PHP course";

echo "$hello";
echo "<br>";
echo $hello_capitals = strtoupper($hello);
echo "<br>";
echo strlen($hello_capitals);
echo "<br>";
echo strrev($hello_capitals);
echo "<br>";
echo "$hello" . " $text";

