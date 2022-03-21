<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>EX1 NIVEL3</title>
</head>
<body>


<!--

Write a program in PHP to convert a string to an array (trimming each character and removing empty lines).

Entrance
Hello world

Way out
array (10) {[0] => string (1) "H" [1] => string (1) "e" [2] => string (1) "l" [3] => string (1)
 "l" [4] => string (1) "o" [5] => string (1) "W" [6] => string (1) "o" [7] => string (1) "r "
 [8] => string (1)" l "[9] => string (1)" d "}

 
Write a program in PHP that counts the total number of times a value exists in the array.

-->



   
<h2>String to Array</h2>
    
    <h3>Enter data below:</h3>
    <form action ="" method ="POST">
       
        <b>Enter input string:</b><input type="text" name="string" value="" ><br />
        <input type="submit" value="Submit" name="submit">

        </form>


<?php

            $array = array();
            
            //char to be replaced
            $delete = " ";
            //char to replace 
            $replace = "";
            //var for array chars
            $char;

        
            if (isset($_POST['submit'])) {
                $string = $_POST['string'];


               $string_repl =  str_replace ($delete, $replace, $string);

               echo "Original array: $string <br />";
               echo "Stripped array: $string_repl <br />";

               $size = strlen($string_repl);


               for ($i = 0; $i < $size; $i++) {

                $char = substr ($string_repl, $i, 1);
                array_push ($array, $char);

               }

               echo var_dump($array);

            }
        
 ?>


    </body>
    </html>
