<?php
/**
* 
*/
/*write program function nth fibbonacci series */
class fibb{

  public function fibo($var){
		if(is_int($var)){
			$p1 = 0;
			$p2 =1;
			echo $p1;
			echo "$p2";
			for($i=0;$i<=$var;$i++){

				$p3 = $p2+$p1;
				echo $p3;
				$p1=$p2;
				$p2=$p3;
				}
			}
			else{
				echo "please Enter integer Number";
			}
		}
}

$obj = new fibb();
$obj->fibo(6);