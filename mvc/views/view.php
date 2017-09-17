<?php 

class View
{
	public function load($viewName, $data)
	{
		include ".\\views\\$viewName" . ".php";		
	}
}
	


?>