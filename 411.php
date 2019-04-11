<?php

/*$arr = 'Have you ever gone shopping and';

$res = str_split($arr,1);
$aree = array_count_values($res);
//var_dump($aree);die;
foreach ($aree as $k => $v){
    if($v>=3){
        echo $k;
        break;
    }
}*/

//水仙花
/*
for($i=1;$i<=9;$i++){
    for ($j=0;$j<=9;$j++){
        for ($k=0;$k<=9;$k++){
            if($i*$i*$i+$j*$j*$j+$k*$k*$k==$i*100+$j*10+$k){
                echo "$i$j$k";
                echo "\t";
        }
        }
    }
}*/

//1到100
/*$sum=0;
for ($i=0;$i<=100;$i++){
    $sum+=$i;
}
echo $sum;*/

//echo array_sum(range(1,100));

/*function get_sum($n){
    if($n == 1){
        return 1;
    }else{
        return $n+get_sum($n-1);
    }
}

echo get_sum(100);*/

$str = 'abba';
$res = strrev($str);
if($res==$str){
    echo '是回文';
}else{
    echo '不是回文';
}





?>