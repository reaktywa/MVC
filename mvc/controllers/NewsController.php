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



	}
}





?>
