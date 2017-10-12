<?php


class UserModel extends Model
{
	public function __construct($host, $database, $username, $password)
	{
		parent::__construct($host, $database, $username, $password);

	}
public function wyloguj()
{
	$_SESSION['is_open']=FALSE;
	$_SESSION['nick']='';
	header('Location: /MVC/mvc/index.php?DO=0&c=Controller&f=logout');
}

public function login($login,$haslo){
$result=$this->mysqli->query("select * from users join category on (users.Category=category.CategoryID)"."Where Nick ='".$login."' AND Passwd= '".$haslo."' AND Ban=0");
$row=$result->fetch_array();
$c=count($row);
if($c==0)
{
	$_SESSION['is_open']=FALSE;
	header('Location: /MVC/mvc/index.php?DO=0&c=Controller&f=faillog');
}
else
{
	$_SESSION['is_open']=TRUE;
	$_SESSION['grupa']=($row[5]);
	$_SESSION['nick']=($row[3]);

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
