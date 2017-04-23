<?php
function heuristic($nodeStart ,$nodeEnd) {
	$Arr1 = explode(',',$nodeStart);
	$Arr2 = explode(',',$nodeEnd); 
	print_r($Arr1);
	print_r($Arr2);
	$hueristic = sqrt(pow(abs($Arr2[1] - $Arr1[1]),2) + pow(abs($Arr2[0] - $Arr1[0]),2))  ;
	
	}
$nodeStart = "1,1";
$nodeEnd = "6,13";
	
heuristic($nodeStart,$nodeEnd);
