<?php 
//不用 + - * / 计算两个数的和
function threeth($a,$b){
    $sum = 0;
    while($b){
       $sum = $a ^ $b;
       $b = ($a & $b)<<1;
       $a = $sum;
    }
    return $sum;
}
echo threeth(6,3);






 ?>