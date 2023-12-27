<?php

# Normal array like this way

// $arr = array("this", "that", "what");
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];

// Associative array

$favCol = array(
    "shubham"=> "red",
    "rohan"=> "blue",
    "keval"=> "green",
    8=> "this"
);


echo $favCol["rohan"];
echo "<br>";
echo $favCol["shubham"];
echo "<br>";
echo $favCol[8]; // jema interger value pan hoi sake integer ma tethi ema aapeli che 
?>