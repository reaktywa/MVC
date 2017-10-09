<?php


class UserModel extends Model
{
	public function __construct($host, $database, $username, $password)
	{
		parent::__construct($host, $database, $username, $password);

	}

	public function login($login,$haslo)
	{

$result=$this->mysqli->query("select * from users join category on (users.Category=category.CategoryID)"."Where Nick ='".$login."' AND Passwd= '".$haslo."'");
$row=$result->fetch_array();
$c=count($row);
if($c==0)
{
	echo "nie udalo sie";
}
else
{
	echo "sie udalo";
}



	}

	public function rejestracja($Login, $Passwd, $Imie, $Nazwisko) {
      $result = $this->mysqli->query("select * from users where Nick='".$Login."'");
      $row=$result->fetch_array();

      if($row[0]) $GLOBALS['RegError'] = TRUE;
      else {
        $this->mysqli->query("INSERT into users (userID, Firstname, Surname, Nick, Passwd, Category) values(NULL, '".$Imie."', '".$Nazwisko."', '".$Login."', '".md5($Passwd.$this->sol)."', '3')");
        if(mysqli_error($this->mysqli) != '') $GLOBALS['RegError'] = TRUE;
      }
    }
}

 ?>
