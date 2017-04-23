<?php

global $nodeEnd;
$nodeStart = "0,2";
$nodeEnd = "6,13";



findAdjacentNodes($nodeStart);

function findAdjacentNodes($nodeStart) {
	$adjacentNodes = array();
	$nodeCoordinates = explode(',',$nodeStart);
	$nodeCoordinates[0] = $nodeCoordinates[0] + 1; 
	array_push($adjacentNodes,$nodeCoordinates);
	$nodeCoordinates[0] = $nodeCoordinates[0] - 2;
	array_push($adjacentNodes,$nodeCoordinates);
	$nodeCoordinates[1] = $nodeCoordinates[1] + 1;
	$nodeCoordinates[0] = $nodeCoordinates[0] + 1;
	array_push($adjacentNodes,$nodeCoordinates);
	$nodeCoordinates[1] = $nodeCoordinates[1] - 2;
	array_push($adjacentNodes,$nodeCoordinates);

//	print_r($nodeStart);
//	echo '<pre>';
//	print_r($adjacentNodes);
	
	neighbourHeuristic($adjacentNodes,$GLOBALS['nodeEnd']);
	}

function neighbourHeuristic($adjacentNodes, $nodeEnd ) {
	echo '<pre>';
	print_r($adjacentNodes);
	}

function heuristic($nodeStart ,$nodeEnd) {
	$Arr1 = explode(',',$nodeStart);
	$Arr2 = explode(',',$nodeEnd); 
	print_r($Arr1);
	print_r($Arr2);
	$hueristic = sqrt(pow(abs($Arr2[1] - $Arr1[1]),2) + pow(abs($Arr2[0] - $Arr1[0]),2))  ;
	print_r($hueristic);
	}

	//heuristic($nodeStart,$nodeEnd);
