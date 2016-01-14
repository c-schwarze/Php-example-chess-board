<?php

$color_array = array();
$color = 'white';

for( $i = 0; $i < 8; $i++ ){
	$color_array[$i] = array();
	for( $j = 0; $j < 8; $j++ ){
		array_push($color_array[$i], $color);
		if( $color == 'white')
			$color = 'black';
		else
			$color = 'white';
	}
}

