<?php

require './models/models.php';
class NewsModel extends Model{

	public function __construct($host, $database, $username, $password)
	{
		parent::__construct($host, $database, $username, $password);

	}

	public function allRecords(){

		if ($_GET["DO"]=0)
		{
			$_GET["DO"]=NULL;
		}

		$result = $this->mysqli->query("SELECT * FROM news LIMIT 4 OFFSET ".($_GET["DO"]).";");
		//print_r($result);
		//$result = $this->mysqli->query("SELECT * FROM news");
		$data=NULL;
		while($row=$result->fetch_array())
		{
			$data[]=$row;
		}
		return $data;

	}
}


?>
