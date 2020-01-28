<?php
$name = "hanji";

if ($name == "hanji") {
    echo "私は".$name."です";
} else {
    echo $name."ではありません";
}

$total = 0;

for ($i=1; $i<10001; $i++) {
    $total += $i;
}

echo $total;

$fruits = array("apple", "orange", "grape", "strawberry", "pear");

foreach ($fruits as $fruit) {
    echo $fruit;
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}