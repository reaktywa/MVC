<?php
include "./models/NewsModel.php";
include "./views/view.php";

Class Controller
{
  public function __construct() {

       //session_start();
      // $this->buildPage();
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
}


 ?>
