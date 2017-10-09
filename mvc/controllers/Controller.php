<?php
Class Controller
{
  public function __construct(){
    echo "controller:construct()<br>";
  }
}

public function loadView ($viewName,$data,$returnHTML==false)
{
  if ($returnHTML==TRUE) ob_start();

  include ".\\views\\$viewName.php";
  
  $content=NULL;
  if ($returnHTML==TRUE) {
    $content=ob_get_contents();
    ob_end_clean();
    return $content;
  };
}
 ?>
