<?php
$exp=[2,4,9,3,17,6];
$test = 0;
foreach ($exp as $key => $value) {
	if($value>$test){
		$test=$value;
	}
}
echo $test."without function </br>";

/*another method is using function*/

$max=max($exp);  // max(array);
echo $max."with function";