<?php


include "./models/NewsModel.php";
include "./views/View.php";

class NewsController
{
	public function test()
	{
		$model = new NewsModel('localhost', 'root', '', 'newssystem');
		$data=$model->allRecords();
		//print_r($data);
		$view = new View();

    $view->load("newsView", $data);



		//data[0]['tresc']= "<h5>"+data[0]['tresc']+"</h5>"
		//print_r($data[$wynik][1]);
	}
}





?>
