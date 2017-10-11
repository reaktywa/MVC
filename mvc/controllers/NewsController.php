<?php


include "./models/NewsModel.php";
include "./views/view.php";

class NewsController //w indexie wołasz sobie klase NewsController i funkcje test
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
		$view=new View();
		$view->load("singleView",$data);

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
