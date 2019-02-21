<?php 
function LastRemaining_Solution($n,$m){
      for($i=0;$i<$n;$i++){
          if($i == ($m-1)){
          	unset($i);
          	$n--;
          }else{
          	return $i;
          }
      }
}

echo LastRemaining_Solution(6,2);




 ?>