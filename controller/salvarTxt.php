<?php
	$texto = $_POST['doc'];
	$title = $_POST['title'];
	unlink('../river/'.$title.'.rive');
	$arquivo = fopen('../river/'.$title.'.rive' ,'a');
	fwrite($arquivo, $texto);
	fclose($arquivo);
	echo $texto;
?>