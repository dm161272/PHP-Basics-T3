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


    <title>EX2 NIVEL3</title>
</head>
<body>


<!--

Wr
Hello world

array (10) {[0] => string (1) "H" [1] => string (1) "e" [2] => string (1) "l" [3] => string (1)
 "l" [4] => string (1) "o" [5] => string (1) "W" [6] => string (1) "o" [7] => string (1) "r "
 [8] => string (1)" l "[9] => string (1)" d "}

Write a program in PHP that counts the total number of times a value exists in the array.

-->



   
<h2>Count chars</h2>
    
    <h3>Enter data below:</h3>
    <form action ="" method ="POST">
       
        <label>Enter input string to convert to array:</label><input type="text" name="string" value="" ><br />
        
        <label>Enter char to find:</label><input type="text" name="char" value="" ><br />

        <input type="submit" value="Submit" name="submit">

        </form>


<?php

            $array = array();
            $counter = 0;
            $array_char;
            //var for array chars
            $char;

        
            if (isset($_POST['submit'])) {
                $string = $_POST['string'];
                $char_x = $_POST['char'];


               $size = strlen($string);


               for ($i = 0; $i < $size; $i++) {

                $char = substr ($string, $i, 1);
                array_push ($array, $char);

               }

               $size = count($array);


               for ($i = 0; $i < $size; $i++) {

                $arraychar = $array[$i];

                if ($char_x == $arraychar) {

                    $counter++;

                }
                

               }


               echo print_r($array) . "<br /><br />";
               echo "Char: <b>$char_x</b> found  <b>$counter</b> times in the array.";
 


            }
        
 ?>


    </body>
    </html>
