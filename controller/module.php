<?php
	switch ($_POST['fun']) {
		case 'getModules':
			getModules();
			break;

		case 'addModule':
			addModule();
			break;
			
		case 'getUser':
			getUser();
			break;
			
		case 'deleteModules':
			getUser();
			break;
	}


	function getModules() {
		include '../modal/module.php';
		$module = new Module;
		echo json_encode($module->getModules());
	}

	function addModule() {
		include '../modal/module.php';
		$module = new Module;
		$temp = '-';
		if (isset($_POST['permitidos'])) {
			$permitidos = $_POST['permitidos'];
			foreach ($permitidos as $permitido) {
				$temp .= $permitido.'-';
			}
		}
		$permitidos = $temp == '-' ? '' : $temp;
		echo json_encode($module->newModule($_POST['nome'], $_POST['descricao'], $permitidos));
	}

	function getUser() {
		echo json_encode([]);
	}

	function deleteModules() {
		include '../modal/module.php';
		$module = new Module;
		echo 'true';
	}
?>