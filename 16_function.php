<?php
echo " Welcome to php tutorial on functions <br>" ;

function pricessMarks($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $value;
}

$rohandas = [34,45,56,76,78,98];
$sumMarks = pricessMarks($rohandas);
echo "total marks scored by rohan out of 600 is $sumMarks";
?>