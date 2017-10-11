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
		order by n.Date ASC
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

		$data=NULL;
		while($row=$result->fetch_array())
		{
			$data[]=$row;
		}
		return $data;
	}

public function dodkom($nID,$cText,$cAuthor){
	$this->mysqli->query("INSERT into comments (ComentID, NewsID, Text, Date, Author) values(NULL, '".$nID."', '".$cText."', CURRENT_TIMESTAMP, '".$cAuthor."')");
	if(mysqli_error($this->mysqli) != '')
	{
		echo "Nie udalo sie";
	}
	else{
		echo "Pomyślnie dodano komenta";
	}
}

public function dodart($nTytul,$nText,$nAuthor){
	$this->mysqli->query("INSERT into news (NewsID, Title, Text, Date, Author) values(NULL, '".$nTytul."', '".$nText."', CURRENT_TIMESTAMP, '".$nAuthor."')");
	if(mysqli_error($this->mysqli) != '')
	{
		echo "Nie udalo sie";
	}
	else{
		echo "Pomyślnie dodano artykul";
	}
}

}

// viewUser::userAddCommentForm();

?>
