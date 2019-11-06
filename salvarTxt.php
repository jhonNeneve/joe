<?php
	$texto = $_POST['texto'];
	$arquivo = fopen('brain.rive','a');
	fwrite($arquivo, $texto);
	fclose($arquivo);
	echo $texto;
?>