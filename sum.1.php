<?php

function sum($max) {
    $result = 0;
    
    for($i = 1; $i <= $max; $i++) {
        $result += $i;
    }
    
    return $result*2;
}

echo sum(10);

function f($a, $b) {
    return $a+$b;
}
echo f(1, 3);

$pueue = array(1, 3, 5, 7, 9);
$arr = array_product($pueue);
var_dump($arr);

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a) {
         $max_number = $a;
     }
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 
 echo max_array(array(9, 100, 5000, 400000));



?>