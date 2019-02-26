<?php 
//第一道题
function number1($n,$m){
   $arr = range(1,$n);
   for($i=0;$i<$n;$i++){
      if(($i+1)%$m == 0){
          unset($arr[$i]);
      }else{
          array_push($arr,$arr[$i]);
          unset($arr[$i]);
      }
   }
   return current($arr);
}
echo number1(6,3);

//第二道题
function number2($arr){
  $count = count($arr);
  rsort($arr);
  $array = [
      [array_shift($arr)],
      [array_shift($arr)],
      [array_shift($arr)],
  ];
  //var_dump($array);die;
  for($i=0;$i<count($arr);$i++){
      $array[2][] = $arr[$i];
      $sum = array_sum($array[2]);
      if($sum > array_sum($array[0])){
         $array = [
            $array[2],
            $array[0],
            $array[1],
         ];
      }else{
      	$array = [
            $array[0],
            $array[2],
            $array[1],
         ];
      }
  }
  return $array;
}
echo "<pre>";
print_r(number2([12,52,45,32,41,65,78,75]));

//第三道题
function bank(active_time,$process_time){
  $count = count($active_time);
  $windows = [];
  $wait_time = 0;
  for($i=0;$i<$count;$i++){
  	while($windows < 4){
  	$windows[] = $active_time[$i]+$process_time[$i];
  	continue;
  }
  sort($windows);
  $bye_time = array_push($windows);
  if($bye_time > $active_time[$i]){
      $wait_time += $bye_time - $active_time[$i];
      $now_time = $active_time[$i] + $process_time[$i]; 
  }else{
  	  $now_time = $active_time[$i] + $process_time[$i];
  }
 }
  return $wait_time/$count;
}
echo bank([9.01, 9.10, 9.20, 9.21, 9.22],[0.30, 0.18, 0.22, 0.47, 0.11]);
//第四道题

	provate $n;
	provate __clone();
	provate __construct();
	public function select(){
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=ten","root","root");
    $sql = "select * from dianzan";
    $res = $pdo->query($sql)->fetchAll(FETCH::ACCOS);
    return $res;
	}
	public function find(){
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=ten","root","root");
    $sql = "select * from dianzan";
    $res = $pdo->query($sql)->fetchOne();
    return $res;
	}






 ?>