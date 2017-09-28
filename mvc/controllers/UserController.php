<?php

require './models/models.php';

class UserController
{
  public function rejestracja()
  {
    $model = new NewsModel('localhost', 'root', '', 'newssystem');
  }

  public function logowanie($login,$haslo)
  {

  }
}

class User extends controller
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

 ?>
