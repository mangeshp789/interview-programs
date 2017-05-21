<?php
/*
	find out particular date base on week num from date range given   */
$startdate = date("d M Y");
$enddate = date("d M Y",strtotime("+6 week",strtotime($startdate)));

//echo $startdate;
//echo $enddate;

$weekcount = 2; //increment week count;
$day_num = 2;

$monthofweek_num_start_date = date("W",strtotime($startdate));
$monthofweek_num_end_date   = date("W",strtotime($enddate));

for($i = $monthofweek_num_start_date;$i<$monthofweek_num_end_date;){
	$i = $weekcount + $i;
	//echo date("Y")."-W".$i."-"."2";
	echo date("l d M Y ",strtotime(date("Y")."-W".$i."-".$day_num));
	//format  use for strtotime("2017-W(week_num)-weekday as per num");
}