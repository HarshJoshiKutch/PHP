<?php
// Connecting to the Database 

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharsh2";  // jo table create karva mate database no use karvama ave che

// Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful 
if(!$conn){
    die("Sorry we failed to connect:" . mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create the table in db

$sql = "CREATE TABLE `phptrip` (`enrollno` INT(6) NOT NULL AUTO_INCREMENT , `surname` VARCHAR(12) NOT NULL , `address` VARCHAR(6) NOT NULL , PRIMARY KEY (`enrollno`));"

$result = mysqli_query($conn,$sql);

// create the table in the db

if($result ){
    echo "the table was created succesfully! <br>";
}
else{
    echo "the table was not created succesfully because of this error ---> " . mysqli_error($conn);
}


?>