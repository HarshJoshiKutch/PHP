<?php

echo "welcome to the world of foreach loop";

$arr = array ("bananas","apples","Harpic","Bread","Butter");
// for($i=0; $i< count($arr); $i++){
//     echo "<br>";
//     echo $arr[$i];
//     echo "<br>";
// }

foreach($arr as $value){
    echo "<br>";
    echo "$value <br>";
}
?>