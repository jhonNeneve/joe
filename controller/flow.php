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
		if ($_POST['id'] != 'false') {
			print_r($_POST);
			die();
			echo json_encode($flow->editFlow(
				$_POST['id'],
				$_POST['titulo'],
				$_POST['descricao'],
				$_POST['modulo'],
				$_POST['largura'],
				$_POST['altura'],
				$_POST['fluxo']
			)
			);		
		} else {
			echo json_encode($flow->newFlow(
				$_POST['titulo'],
				$_POST['descricao'],
				$_POST['modulo'],
				$_POST['largura'],
				$_POST['altura'],
				json_encode($_POST['fluxo']))
			);
		}
	}

	function getFlow() {
		include '../modal/flow.php';
		$flow = new Flow;
		echo json_encode($flow->getFlow(
			$_POST['hash']
		));
	}
?>