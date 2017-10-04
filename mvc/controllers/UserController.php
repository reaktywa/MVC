<?php

include './models/models.php';
include './views/view.php';
//include "./models/UserModel.php";
//include './views/logowanieView.php';

class UserController
{
  public function rejestracja()
  {
    $model = new NewsModel('localhost', 'root', '', 'newssystem');
  }

  public function logowanie($login,$haslo)
  {
    $model = new UserModel('localhost', 'root', '', 'newssystem');

$_GET[$login]=$login;
$_GET[$haslo]=$haslo;

  }

  public function formularz()
  {
    $view = new View();
    $view->load2("logowanieView");
  }

 public function formularz2()
  {
    $view = new View();
    $view->load2("rejestracjaView");
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
