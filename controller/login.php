<?php
switch ($_POST['fun']) {
	case 'login':
	login();
	break;

	case 'logoff':
	logoff();
	break;
}

function login() {
	try {
		include '../modal/login.php';
		$login = new Login;
		$user = $login->login($_POST['email'], $_POST['senha']);
		if ($user) {
			session_start();
			$_SESSION['id'] = $user['id'];
			$_SESSION['nome'] = $user['nome'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['senha'] = $user['senha'];
			$_SESSION['permissao'] = $user['permissao'];
			if ($_SESSION['permissao'] == 'admin') {
				echo "home.php";
			} else {
				echo "chat.php";
			}
		} else {
			echo "false";
		}
	} catch (Exception $e) {
		echo $e;
	}
}

function logoff(){
	$_SESSION = array();
	if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
	}
	echo 'login.html';
}
?>