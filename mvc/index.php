<?php
session_start();
//$_SESSION['is_open']=FALSE;


  //  error_reporting(0);
	//print_r($_GET);
	//$controllerClassName = $_GET['c'];
	//$functionName = $_GET['f'];
//$c="NewsController";
//$f="test";
echo "</br>";
	$controllerClassName = $_GET['c'];
	$functionName = $_GET['f'];

	//$parameters = array_slice($_GET, 2, 2);
	//echo "controllerClassName=$controllerClassName functionName=$functionName";

	include ".\\controllers\\" . $controllerClassName . ".php";

	$controller = new $controllerClassName();
    $controller->$functionName();

	$tab = $_GET = array();

?>
