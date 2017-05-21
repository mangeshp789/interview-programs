<?php
$input= ["E","Y","U","A","E","A"];

$count_values = [];
foreach ($input as $a) {


  @$count_values[$a]++;

}
print_r($count_values);