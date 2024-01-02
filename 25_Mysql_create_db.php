<?php
// Connecting to the Database 

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername,$username,$password);

// Die if connection was not successful 
if(!$conn){
    die("Sorry we failed to connect:" . mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


//Create a database

$sql = "CREATE DATABASE dbharsh2";
$result = mysqli_query($conn,$sql);

// check for the database creation success

if($result){
    echo "the db was created succesfully";
}
else{
    echo "the db was not created succesfully because of this error ---> " . mysqli_error($conn);
}

echo ($result);

?>