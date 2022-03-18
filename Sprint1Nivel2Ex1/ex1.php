<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


/*

Write a PHP program to calculate the sum of the two given integer values.
 If the two values are equal, return twice their sum.

Example

Entrance
1, 2
3, 2
2, 2

Way out
3
5
8

*/


?>


<h2>Sum calculator</h2>

<br />

<form action ="" method ="POST" style="font-weight: bold;">
    Enter number 1: <input type="number" name="value_1" value="">
    <br />
    Enter number 2: <input type="number" name="value_2" value="">
    <input type="submit" value="Submit" name="submit" style="font-weight: bold;">
    </form>



<?php

$title = "Sum * 2";

if (isset($_POST['submit'])) {

$num_1 = $_POST['value_1'];
$num_2 = $_POST['value_2'];

$sum = ($num_1 + $num_2) * 2;

if ($num_1 % $num_2 != 0) {

    $sum = ($num_1 + $num_2);
    $title = "Sum";

}

echo "<br />";
echo "<b>" . $title . " = " . $sum . "</b>";

}

?>

</body>
</html>