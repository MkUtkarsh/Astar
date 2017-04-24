<?php
$nodes = array("A","B","C","D","E","F","G","Hue");
$A = array(0,1,2,0,3,0,0,2);
$B = array(0,0,0,0,0,0,2,4);
$C = array(0,0,0,0,0,0,0,2);
$D = array(0,2,1,0,0,0,0,2);
$E = array(0,0,0,1,0,1,2,3);
$F = array(0,0,0,0,0,0,2,3);
$G = array(0,0,0,0,0,0,0,0);


function NodesArray($nodes,$A,$B,$C,$D,$E,$F,$G) {
	global $node; 
	 $node = array(array($A),array($B),array($C),array($D),array($E),array($F),array($G));
}

function route($node,$row,$temp2){
	$colCount = count($node);
	$i = 0;
	while($i < $colCount){
		//echo $node[$row][0][$i];
		$varTemp = $node[$row][0][$i];
		 if ($varTemp>0){
		pathFind($varTemp,$i,$node,$temp2,$row);
		 } 
		 else {}
		$i++;
	}
//	echo "<pre>";
//	print_r($tempArray);
	//print_r(($tempArray));
	
}

function pathFind($varTemp,$i,$node,$temp2,$row){

	global $tempArray;
	global $tempArray1;
	$tempArray = array();
	$tempArray1 = array();
	
		//echo $varTemp;
		
			//array_push($tempArray,$node[$row][0][$i]);
			array_push($tempArray,$i);
			array_push($tempArray1,$varTemp);
			global $functionArray;
			//echo $row;
			echo '<pre>';
			print_r($tempArray[0]);
			$BaseArray = array();
			$function = 0;
			
			foreach ($tempArray1 as $temp1){
				//$function = $temp1 + $node[]
				$function = calcFunction($tempArray,$temp1,$node,$temp2);
				if ($function < $node[0][0][7]){
				array_push($BaseArray,$function);
				
				}
//				print_r($tempArray);
				foreach ($tempArray as $temp){
					
					
					route($node,$temp,$temp2);}
				
			}
		
	}

function calcFunction($tempArray,$temp1,$node,&$temp2) {
		$indice = 0;
		$row = $tempArray[$indice]; 
		$temp2 = $temp2 + $temp1;
		$function = $temp2 + $node[$row][0][7];
//		array_push($functionArray,$function);
		$indice++;
		return $function;
		return $temp2;
//		print_r($functionArray);
	}

NodesArray($nodes,$A,$B,$C,$D,$E,$F,$G);
//		echo '<pre>';	
//		print_r($node);	


	route($node,0,0);
//compareFunctions($functionArray);
//echo '<pre>';
//print_r($node);
?>