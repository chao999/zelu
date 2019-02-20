<?php 
function choushu($number){
    $num = $number%2;
    if($num==1){
    	return 1;
    }else{
    	$num1 = $num%3;
    	if($num1==1){
    		return 1;
    	}else{
    		$num2 = $num1%5;
    		if($num2==1){
    			return 1;
    		}else{
    			return 0;
    		}
    	}
    }
}
    echo choushu(12);








 ?>