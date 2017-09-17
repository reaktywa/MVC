<?php

require './models/models.php';
class NewsModel extends Model{

	public function __construct($host, $database, $username, $password)
	{
		parent::__construct($host, $database, $username, $password);

	}



	public function allRecords(){
		 $OD=0;
		 $DO=4;
		$result = $this->mysqli->query("SELECT * FROM news WHERE newsID BETWEEN ".$OD." AND ".$DO.";");
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
