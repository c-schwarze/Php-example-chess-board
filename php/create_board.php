<?php

include_once 'general_functions.php';
createTwigEnv();
echo createChessBoard();

function createChessBoard(){
	$color_array = array();
	$color = 1;

	for( $row = 0; $row < 8; $row++ ){
		$color_array[$row] = array();
		for( $col = 0; $col < 8; $col++ ){
			// push each color onto each column of the row
			array_push($color_array[$row], $color);
			$color = switchColor($color);
		}
		// switch after every row, since you want each row to alternate colors
		$color = switchColor($color);
	}

	$html = twig('/twig', 'board.html', array('color_array' => $color_array) );

	return $html;
}

function switchColor( $color ){
	return ($color + 1)%2;
}