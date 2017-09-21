<?php

require './models/models.php';
class NewsModel extends Model{

	public function __construct($host, $database, $username, $password)
	{
		parent::__construct($host, $database, $username, $password);

	}

	public function allRecords(){

		$result = $this->mysqli->query("SELECT * FROM news WHERE newsID BETWEEN ".($_GET["OD"])." AND ".($_GET["DO"]).";");
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
