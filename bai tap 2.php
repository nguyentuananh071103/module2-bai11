<?php
function binarySearch($numbers, $needle) {
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            echo 'tôi nghĩ nhỏ hơn: '.$numbers[$mid].'<br>';
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            echo 'tôi nghĩ lớn hơn: ' . $numbers[$mid] . '<br>';
            $low = $mid + 1;
//        } else {
//            return TRUE;
//        }
//    }
//    return FALSE;
        } else if ($numbers[$mid]=$number){
        echo'đúng số rùi nhé!!!!' . $numbers[$mid]. '<br>';
        break;
        }
        else{
            return TRUE;
        }
    }
    return FALSE;
}
$number =rand(1,100);
echo 'số tôi nghĩ là: '.$number .'<br>';
$numbers=range(1,100,1);
if(binarySearch($numbers,$number) !=FALSE){
    echo "$number : trò chơi kết thúc";
}
//else{
//    echo "$number không tìm thấy";
//}