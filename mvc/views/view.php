<?php

class View
{
	public function load($viewName, $data)
	{
		include ".\\views\\$viewName" . ".php";
	}

public function getNews()
{
	$this->loadView('addArticle');
}

public function addNews($dataTable)
{
	print_r($dataTable);
}

}
// tabela z uzytkownikami ma miec ID,login,haslo,kategorie i polaczanie z tabela kategorie w ktorej jest ID i kategorie.
?>
