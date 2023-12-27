<?php

$name = "Harsh is a good boy";
echo $name;
echo "<br>";

echo "The length of the my string is " . strlen($name);
echo "<br>";

echo str_word_count($name); //string ma word count karva mate
echo "<br>";

echo strrev($name);  // string reverse karva mate
echo "<br>";

echo strpos($name,"is");// string ma je word joie che eni postion check karva mate 
echo "<br>"; 

echo strpos($name,"good");
echo "<br>"; 

echo str_replace("Harsh","Keval",$name);
echo "<br>"; 

echo "<pre>";
echo rtrim("   this is a good boy   "); // right ma jetli space hoi e hatavi de 
echo "<br>";  
echo ltrim("   this is bad boy   "); // left ma jetli spcae hoi e hatavi de 
echo "</pre>"

?>