<?php
	switch ($_POST['fun']) {
		case 'getModules':
			getModules();
			break;

		case 'addModule':
			addModule();
			break;
			
		case 'getUsers':
			getUsers();
			break;
			
		case 'deleteModule':
			deleteModule();
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
		if (isset($_POST['permitidos']) && !empty($_POST['permitidos'])) {
			$permitidos = $_POST['permitidos'];
			foreach ($permitidos as $permitido) {
				$temp .= $permitido.'-';
			}
		}
		$permitidos = $temp == '-' ? '' : $temp;

    if ($module->newModule($_POST['nome'], $_POST['descricao'], $permitidos)) {
      echo $module->getLastId();
    } else {
      echo "false";
    }
	}

	function getUsers() {
    include '../modal/user.php';
    $user = new User;
		echo json_encode($user->getUsers());
	}

	function deleteModule() {
		include '../modal/module.php';
		$module = new Module;
		echo $module->deleteModule($_POST['id']);
	}
?>