<?php
include "./models/NewsModel.php";
include "./views/view.php";

Class Controller
{
  public function __construct() {

       //session_start();
       $this->buildPage();
   }

public function listu()
{
  $model = new Model('localhost', 'root', '', 'newssystem');
  $data=$model->listu();
  $view = new View(); // tu juz ma dane z modelu i
  $view->load("listaView", $data);// wysyla to do view
}
public function ban()
{  $model = new Model('localhost', 'root', '', 'newssystem');
   $model->ban();
   header('Location: /MVC/mvc/index.php?DO=0&c=Controller&f=listu');
}
public function unban()
{  $model = new Model('localhost', 'root', '', 'newssystem');
   $model->unban();
   header('Location: /MVC/mvc/index.php?DO=0&c=Controller&f=listu');
}
public function faillog()
{
  $view = new View();
  $view->load2("faillogView");
}

public function logowanie()
{
  if ($_SESSION['is_open']==TRUE){
    echo "Jesteś zalogowany";
  }
  else{
  $view = new View();
  $view->load2("logowanieView");
}
}

public function rejestracja()
{
  if ($_SESSION['is_open']==TRUE){
    echo "Jesteś zalogowany";
  }
  else {
  $view = new View();
  $view->load2("rejestracjaView");
}
}
public function logout()
{
  $view = new View();
  $view->load2("logoutView");
}
public function buildPage()
{
  if ($_SESSION['is_open']==FALSE){
  require_once('header.php');
  require_once('stopka.php');
}
else {
  require_once('zheader.php');
  require_once('stopka.php');
}

}

}


 ?>
