<?php

class View 
{
	public function load($viewName, $data)
	{
		include ".\\views\\$viewName" . ".php";
	}

public function getNews()
{
	$this->loadView('addArticle');
}

public function addNews($dataTable)
{
	print_r($dataTable);
}

}

?>
