<?php

class UserModel extends Model
{
	public function __construct($host,$user,$password,$database){
		parent::__construct($host,$user,$password,$database)}
	}
	public function login($login,$password)
	{
		$query= "select * from users join groups on (users.group=groups.groupsID)"."Where login ='$login' AND password= '$password'";
		$result=NULL;
		$row=NULL;
		$result=$this->mysqli->query($query);
		if($result->num_rows===1)
		{
			$row=$result->fetch_array();
		}
		return $row;
	}
}

 ?>
