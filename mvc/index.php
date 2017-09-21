<?php include ('header.php');

	//print_r($_GET);
	//$controllerClassName = $_GET['c'];
	//$functionName = $_GET['f'];
$c="NewsController";
$f="test";
	$controllerClassName = $c;
	$functionName = $f;


	//$parameters = array_slice($_GET, 2, 2);
	//echo "controllerClassName=$controllerClassName functionName=$functionName";

	include ".\\controllers\\" . $controllerClassName . ".php";
	$controller = new $controllerClassName();
    $controller->$functionName();

	$tab = $_GET = array();
include ('stopka.php');
?>
