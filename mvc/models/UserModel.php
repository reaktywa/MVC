<?php

class UserModel extends Model
{
	public function __construct($host,$user,$password,$database)

		parent::__construct($host,$user,$password,$database)



	public function login($login,$password)
	{
		$query= "select * from users join category on (users.Category=category.CategoryID)"."Where login ='$login' AND password= '$password'";
		$result=NULL;
		$row=NULL;

	}
}

 ?>
