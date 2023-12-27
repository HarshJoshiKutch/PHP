<?php
// echo "while loops in php:";
// echo "<br>";

// $i = 0;
// while ($i<5){
//     echo $i+1;
//     echo "<br>";
//     $i++;
// }


// // for loop

// echo "This is for loop action in <br>";
// for ($index =1; $index  <6; $index ++) { 
//     # code...
//     echo "The number is $index <br>";
// }

$i = 0;
$j = 1;

echo "<br> Fibbonacci series <br/>";
echo ($i.$j);

for($count =0; $count <9 ; $count++){
    $k = $i+$j;
    $i = $j;
    $j  = $k;
    echo ($k);
}


?>