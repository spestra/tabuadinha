<?php

function __autoload($nome_da_classe) {

	// verifica o nome do arquivo
	$dir = 'library/' . $nome_da_classe . '.class.php';
	
	// verificando se o arquivo exist
	if(file_exists($dir)) {
		require_once($dir);
	}

}

?>