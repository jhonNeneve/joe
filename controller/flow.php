<?php
	switch ($_POST['fun']) {
		case 'saveFlow':
			saveFlow();
			break;

		case 'getFlow':
			getFlow();
			break;
	}

	function saveFlow() {
		include '../modal/flow.php';
		$flow = new Flow;
		echo json_encode($flow->saveFlow(
			$_POST['titulo'],
			$_POST['descricao'],
			$_POST['modulo'],
			$_POST['largura'],
			$_POST['altura'],
			json_encode($_POST['fluxo']))
		);
	}

	function getFlow() {
		include '../modal/flow.php';
		$flow = new Flow;
		echo json_encode($flow->getFlow(
			$_POST['hash']
		));
	}
?>