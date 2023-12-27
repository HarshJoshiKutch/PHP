<?php
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