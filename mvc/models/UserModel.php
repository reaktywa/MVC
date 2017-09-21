<?php

require 'models.php';
class UserModel extends Model{

	public function __construct($host, $database, $username, $password)
	{
		parent::__construct($host, $database, $username, $password);

	}

  public function rejestracja($loginek,$haselko,$kategoria){

    if (isset($_POST['rejestruj']))
    {
       $login = filtruj($_POST['login']);
       $haslo = filtruj($_POST['haslo']);
       $kategoria = filtruj($_POST['kategoria']);


       // sprawdzamy czy login nie jest już w bazie
       if (mysql_num_rows(mysql_query("SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
       {

             mysql_query("INSERT INTO `uzytkownicy` (`login`, `haslo`, `kategoria`)
                VALUES ('".$login."', '".md5($haslo)."', '".$kategoria."');");

             echo "Konto zostało utworzone!";

       }
       else echo "Podany login jest już zajęty.";
    }
  }


public function login($loginek, $haselko)
{
  if ($loginek == $login && $haselko == $haslo) {

  $_SESSION["inloggedin"] = true;

  }
      else {
        echo "zle dane";
      }
}
}
?>
