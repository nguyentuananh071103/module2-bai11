<?php
function findMins($arr): int
{
    $min = $arr[0];
    for ($i = 1; $i<count($arr); $i++){
        if ($arr[$i]<$min){
            $min= $arr[$i];
        }
    }
    return $min;
}
function findMax($arr): int
{
    $max=$arr[0];
    for ($i = 1; $i<count($arr); $i++){
        if ($max<$arr[$i]){
            $max=$arr[$i];
        }
    }
    return $max;
}
$nums =[-2, 0,5 ,7 ,9 , -5, 30 , 100];
foreach ($nums as $num){
    echo $num. " ";
}
$minValue = findMins($nums);
echo "<br>"."The minimum value is: " . $minValue;

$maxValue = findMax($nums);
echo "<br>"."The maximum value is: " . $maxValue;
