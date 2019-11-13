<?php
	$texto = $_POST['doc'];
	$title = $_POST['title'];
	$arquivo = fopen('../river/'.$title.'.rive' ,'a');
	fwrite($arquivo, $texto);
	fclose($arquivo);
	echo $texto;
?>