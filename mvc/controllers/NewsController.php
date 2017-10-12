<?php

include "./controllers/Controller.php";


class NewsController extends Controller //w indexie wołasz sobie klase NewsController i funkcje test
{
	public function test()
	{
		$model = new NewsModel('localhost', 'root', '', 'newssystem');
		$data=$model->allRecords(); //tu idzie do modelu
		//print_r($data);
		$view = new View(); // tu juz ma dane z modelu i

    $view->load("newsView", $data); // wysyla to do view
	}

	public function singleView()
	{
		$model = new NewsModel('localhost', 'root', '', 'newssystem');
		$data=$model->single();
		if($_SESSION['is_open']==TRUE)
		{
		$view=new View();
		$view->load("singleView",$data);
	}
	else {
		$view=new View();
		$view->load("nSingleView",$data);
	}

	}
	public function coment()
{
	$data=$_POST;
	$model = new NewsModel('localhost', 'root', '', 'newssystem');
  $model->dodkom($data['nID'], $data['cText'], $data['cAuthor']);
}

public function artk()
{
	$data=$_POST;
	$model = new NewsModel('localhost', 'root', '', 'newssystem');
	$model->dodart($data['nTytul'],$data['nText'],$data['nAuthor']);
}

public function dodajart(){
	 $view = new View();
	 $view->load2("dodajartView");
 }
 }


?>
