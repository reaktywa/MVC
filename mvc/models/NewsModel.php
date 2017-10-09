<?php

require './models/models.php';

class NewsModel extends Model
{

	public function __construct($host, $database, $username, $password)
	{
		parent::__construct($host, $database, $username, $password);

	}

	public function allRecords(){

		$result = $this->mysqli->query("SELECT n.NewsID,n.Title,n.Text,n.Date,(u.Nick) as Author FROM news n
		INNER JOIN users u
		ON n.Author=u.userID
		limit 4 OFFSET ".($_GET["DO"]).";");

		//print_r($result);
		//$result = $this->mysqli->query("SELECT * FROM news");
		$data=NULL;
		while($row=$result->fetch_array())
		{
			$data[]=$row;
		}
		return $data;
		//$sid=$this->($data[$wynik][0]);

	}

	public function single()
	{

		$result = $this->mysqli->query("SELECT n.NewsID,n.Title,n.Text,n.Date,(u.Nick) as Author,(c.Text) as tresckomenta,uc.Nick,c.Date  FROM news n
		INNER JOIN users u
		ON n.Author=u.userID
        LEFT JOIN comments c
        ON n.NewsID=c.NewsID
        LEFT JOIN users uc
        ON c.Author=uc.userID
		WHERE n.NewsID = ".($_GET["sid"])."	;"
	);


/*SELECT u.Nick, c.ComentID,n.NewsID  FROM comments c
		INNER JOIN users u
		ON c.Author=u.userID
        LEFT join news n
        on n.NewsID=c.NewsID*/

		$data=NULL;
		while($row=$result->fetch_array())
		{
			$data[]=$row;
		}
		return $data;
	}

public function com(){
	$result=$this->mysqli->query("SELECT  c.Text,c.Date,u.Nick  FROM comments c
		INNER JOIN users u
		ON c.Author=u.userID
				LEFT join news n
				on n.NewsID=c.NewsID
				WHERE n.NewsID = ".($_GET["sid"])."	;"
				);

				$data2=NULL;
				while($row=$result->fetch_array())
				{
					$data2[]=$row;
				}
				return $data2;
}
}


?>
