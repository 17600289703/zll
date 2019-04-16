<?php
$arr = [1,2,3,4,5,6];
$arr1 = [];
$arr2 = [];
foreach ($arr as $k => $v){
    if($v%2==1){
        $arr1[]= $v;
    }else{
        $arr2[]= $v;
    }
}
$res = array_merge($arr1,$arr2);
var_dump($res);












?>