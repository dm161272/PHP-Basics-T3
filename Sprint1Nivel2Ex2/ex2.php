<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!--


Write a PHP program to swap the first and last character of a given string, and print the new string.

Example

Entrance
wxyz
a
ab

Way out
zxyw
a
ba

-->


<h2>String swap</h2>

<br />

<form action ="" method ="POST" style="font-weight: bold;">
    Enter text: <input type="text" name="value" value="">
    <input type="submit" value="Submit" name="submit" style="font-weight: bold;">
    </form>



<?php

$to_print = "<b style= color:red> Nothing to swap! </b>";

if (isset($_POST['submit'])) {

$text = $_POST['value'];

$length = strlen($text);
$first_char = substr($text, 0, 1);
$last_char = substr($text, -1, $length -1);
$text_stripped = substr($text, 1, $length -2);

if (strcmp($first_char, $last_char) !== 0 && $length != 1) {

$to_print = "Swapped: " . "<b style= color:red>" . $last_char . "</b>" . "<b>" . $text_stripped . "</b>" . "<b style= color:red>" . $first_char . "</b>";

}

echo "<br />";
echo "Original: <b>" . $text . "</b>";
echo "<br />";
echo $to_print;
echo "<br />";

}

?>

</body>
</html>