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
	echo "nie udalo siee";
}
else
{
	echo "sie udalo";
}
	}

public function rejestracja($login, $haslo, $imie, $nazwisko) {
      $result = $this->mysqli->query("select * from users where Nick='".$login."'");
      $row=$result->fetch_array();

      if($row[0]) echo "Nick zajęty, wybierz inny";

      else {
        $this->mysqli->query("INSERT into users (userID, Firstname, Surname, Nick, Passwd, Category) values(NULL, '".$imie."', '".$nazwisko."', '".$login."', '".$haslo."', '2')");
        if(mysqli_error($this->mysqli) != '')
				{
					echo "Rejestracja nie powiodla sie";
				}
				else{
					echo "Pomyślnie";
				}
      }
    }
}



 ?>
