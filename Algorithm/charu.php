<?php

$arr=array(2,4,7,3,12,56,23,54,76,87);
$num=count($arr);
for($i=1;$i<$num;$i++)
{
	$key=$arr[$i];
	$j=$i-1;


	while($j>=0 && $key<$arr[$j])
	{
		$arr[$j+1]=$arr[$j];
		$j--;
	
	
	}
	$arr[$j+1]=$key;


}
echo "<pre>";
print_r($arr);


?> 


