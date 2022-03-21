<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      label {
        display: inline-block;
        width: 300px;
        text-align: left;
        font-weight: bold;
      }
    </style>


    <title>EX3 NIVEL3</title>
</head>
<body>


<!--

$ X = array (10, 20, 30, 40, 50);

Remove an item from the previous array. After deleting the item, the entire keys must be normalized.

For example: Deleting the number 40
Way out
array (5) {[0] => int (10) [1] => int (20) [2] => int (30) [3] => int (40) [4] => int (50) }
array (4) {[0] => int (10) [1] => int (20) [2] => int (30) [3] => int (50)}
Tip: The var_dump () and / or print_r () functions may be useful for you to view the contents of your settings.

-->

   
<h2>Array manipulation</h2>
    

<?php

            $array = array(10, 20, 30, 40, 50);

            //item to delete
            $i = 3;

              echo var_dump($array) . "<br /><br />";

              unset($array[$i]);

              $array = array_values($array);

               echo var_dump($array);

     
 ?>


    </body>
    </html>
