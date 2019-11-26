<?php
	$title = $_POST['title'];
	$arquivo = fopen('../arquivosRive.json' ,'a');
	fwrite($arquivo, $title);
	fclose($arquivo);
?>