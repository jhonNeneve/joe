<?php
	$texto = $_POST['texto'];
	$arquivo = fopen('text.txt','a');
	fwrite($arquivo, $texto);
	fclose($arquivo);
	echo $texto;
?>