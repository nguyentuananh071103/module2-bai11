<?php

function isCount ($arr, $value): int
{
    $count = 0;
    for($i = 0; $i<count($arr); $i++){
        if ($arr[$i]==$value){
            $count++;
        }
    }
    return $count;
}
$arr = [1,2,1,4,21,1,8,9,1,2,9,4,3];
$value = 1;
echo $numbers = isCount($arr, $value);