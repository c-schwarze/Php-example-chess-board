<?php

function createTwigEnv(){
	require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
}

function twig($folderPath, $fileName, $arrayOfVariables){
	$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'] . $folderPath);
	$twig = new Twig_Environment($loader);
	$html = $twig->render($fileName, $arrayOfVariables);

	return $html;
}