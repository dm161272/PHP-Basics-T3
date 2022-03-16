<?php

/*
Create a constant that contains your name and print it on the screen. 
You have to print it in bold title and letter format in HTML.
*/


define ("FIRST_NOM",  "Dmitrii");
define ("LAST_NOM", "Katelkin");

echo "<br><br>";
echo "<title>" . FIRST_NOM . " " . LAST_NOM . "</title>";
echo "<b>" . FIRST_NOM . " " . LAST_NOM . "</b><br><br>";
echo "<i>" . FIRST_NOM . " " . LAST_NOM . "</i>";
