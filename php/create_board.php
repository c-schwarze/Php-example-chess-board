<?php
require_once '/Users/ces55739/Desktop/Php-example-chess-board/vendor/autoload.php';

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
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('/Users/ces55739/Desktop/Php-example-chess-board/twig/');
$twig = new Twig_Environment($loader);
$html = $twig->render('board.html', array(
	'color_array' => $color_array
	));

echo $html;