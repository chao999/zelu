<?php 
//水仙花
function shuixianhua($n){
   $ge = $n%10;
   $shi = ($n%100-$ge)/10;
   $bai = floor($n/100);
   if($n == $ge*$ge*$ge+$shi*$shi*$shi+$bai*$bai*$bai){
      return "这个数是水仙花数";
   }else{
   	  return 0;
   }
}
echo shuixianhua(153);

//出现三次
function three($str){
	$len = strlen($str);
	$arr = [];
	for($i=0;$i<$len-1;$i++){
        $arr[] = $str[$i];
        if($arr[$i] == $str[$i]){
        	array_unshift($arr,$str[$i]);
        	if(count($arr)==3){
        		return $str[$i];
        	}else{
        		return 0;
        	}
        } 
	}
}
echo three("adfsdafadfe");

//回文
function huiwen($str){
	$len = strlen($str);
	$start = 0;
	$end = $len-1;
	$count = floor($len/2);
	for($i=0;$i<$count;$i++){
         if($str[$start] == $str[$end]){
         	$start++;
         	$end--;
         }else{
         	return 0;
         }
         return 1;
	}
}

echo huiwen("123212");

//斐波那契数列
function feibo($n){
   $a = 1;
   $b = 1;
   if($n<=2){
   	return 1;
   }
   for($i=3;$i<$n;$i++){
   	  $sum = $a+$b;
   	  $a = $b;
   	  $b = $sum;
   }
   return $a+$b;
}
echo feibo(6);

//字母对应数字
function zimu($number){
   $list = range('a','z');
   $count = count($list);
   $arr = [];
   while($number){
       //余数
       $yu = $number%$count;
       //商
       $ss = floor($number/$count);
       if($yu == 0){
       	 $ss--;
       	 array_unshift($arr,$list[$count-1]);
       }else{
       	 array_unshift($arr,$list[$yu-1]);
       }
       $number = $ss;
   }
   return implode('',$arr);
}
echo zimu(703);

//台阶
function taijie($n){
   $a = 1;
   $b = 1;
   if($n<=1){
   	return 1;
   }
   for($i=2;$i<$n;$i++){
   	  $sum = $a+$b;
   	  $a = $b;
   	  $b = $sum;
   }
   return $a+$b;
}
echo taijie(4);














 ?>