<?php
	switch ($_POST['func']) {
		case 'getFlow':
			getFlow();
			break;

		case 'deleteFlow':
			deleteFlow();
			break;
	}

	function getFlow() {
		include '../modal/home.php';
		$home = new home;
		echo json_encode($home->getFlow());
	}

	function deleteFlow() {
		include '../modal/home.php';
		$home = new home;
		echo json_encode($home->deleteFlow($_POST['fluxoId']));
	}
?>