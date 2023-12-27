<?php
$name = "Harry";
$income = "20000";

/*  PHP Datatypes
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/

// String - sequence of character
$name = "Harsh";
$friend = 'Rohan';
echo "$name ka friend is $friend<br>";

// Integer - Non decimal number
$income = 455;
$debts = -655;

echo "$income<br>";
echo "$debts<br>";

// Float - Decimal point number
$income = 344.5;
$debts = -455.5;

echo "$income<br>";
echo "$debts<br>";

// Boolean -  can be either true or false
$x= true;
$is_friend = false;
// echo $x;
echo var_dump($x);
echo "<br>";
echo $is_friend;
echo var_dump($is_friend);

// Objects - Instances of classes
// Employee is a  class ----> harsh can be one object

// Array -  used to store multiple values
$friends = array("keval","dhruv", "shubham","harsh");
echo "<br>";
echo var_dump($friends);

echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

// Null    
$Name = NULL;
echo var_dump($Name);


?>