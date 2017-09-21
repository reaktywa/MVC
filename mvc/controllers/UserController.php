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

 ?>
