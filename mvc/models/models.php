<?php

class Model
{
	public $mysqli;
	public $host;
	public $database;
	public $username;
	public $password;

	public function __construct($host,  $username, $password, $database){
		$this->mysqli = new mysqli($host, $username, $password, $database);
	}

	public function listu()
	{
		$result = $this->mysqli->query("SELECT Nick, Ban,userID from users");

		$data=NULL;
		while($row=$result->fetch_array())
		{
			$data[]=$row;
		}
		return $data;
	}
	public function ban()
	{
		$result=$this->mysqli->query("update users
set Ban=1
WHERE userID=".$_REQUEST['userID']);
	}

	public function unban()
	{
		$result=$this->mysqli->query("update users
set Ban=0
WHERE userID=".$_REQUEST['userID']);
	}
}

?>
