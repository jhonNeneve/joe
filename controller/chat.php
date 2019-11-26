<?php
switch ($_POST['fun']) {
	case 'getTitulos':
	getTitulos();
	break;
}

function getTitulos() {
	include '../modal/flow.php';
	$flow = new Flow;
	$titulos = $flow->getTitulos();
	echo json_encode($titulos);
}
?>