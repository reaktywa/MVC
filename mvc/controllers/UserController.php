<?php

include './models/models.php';
include './views/view.php';
include './models/UserModel.php';
//include "./models/UserModel.php";
//include './views/logowanieView.php';


class UserController
{
  public function rejestracja()
  {
    $data=$_POST;
    $model = new UserModel('localhost', 'root', '', 'newssystem');

    $model->rejestracja($data['login'], $data['haslo'], $data['imie'], $data['nazwisko']);
  }


  public function logowanie()
  {
    $data=$_POST;

    $model = new UserModel('localhost', 'root', '', 'newssystem');
    $model->login($data['login'], $data['haslo']);

    if ($_SESSION['grupa']==1 && $_SESSION['is_open']==TRUE)
    {
      $view = new View();
      $view->load2("adminView");
    }
else if($_SESSION['grupa']==2 && $_SESSION['is_open']==TRUE){
  header('Location: /MVC/mvc/index.php?DO=0&c=NewsController&f=test');
}


    //var_dump($_POST);
  }
public function panel()
{
  $view = new View();
  $view->load2("adminView");
}
  public function wyloguj()
  {
    $model = new UserModel('localhost', 'root', '', 'newssystem');
    $model->wyloguj();
  }

  public function formularz()
  {
    if ($_SESSION['is_open']==TRUE){
			echo "Jesteś zalogowany";
		}
    else {
    $view = new View();
    $view->load2("logowanieView");
  }
  }

 public function formularz2()
  {
    if ($_SESSION['is_open']==TRUE){
      echo "Jesteś zalogowany";
    }
    else{
    $view = new View();
    $view->load2("rejestracjaView");}
  }

}
/*
class User extends Model
{
public $userModel;
public function __construct(){
  $this->userModel = new UserModel("localhost","root","","newssystem");
  parent::__construct();
}
public function login($data)
{
  $login=$data['login'];
  $password=$data['password'];
  $loginInfo=$this->userModel->login($login,$password);
  echo "loginInfo: ";
  print_r($loginInfo);
}
}
*/
 ?>
