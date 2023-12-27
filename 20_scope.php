<?php
echo "Welcome to scope and local/ global variable";
echo "<br>";
$a = 98; // Global variable
$b = 34;

function printValue(){
    // $a = 97; local variable 
    global $a,$b;
    echo "the value of your variable a is $a and b is $b "; 
}
echo "<br>";

echo $a;
printValue();

echo var_dump($GLOBALS);
echo "<br>";
echo var_dump($GLOBALS["a"]);
echo "<br>";
echo var_dump($GLOBALS["b"]);
?>