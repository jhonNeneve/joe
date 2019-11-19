<?php
switch ($_POST['fun']) {
	case 'login':
	login();
	break;
}

function login() {
	include '../modal/login.php';
	$login = new Login;
	$user = $login->login($_POST['email'], $_POST['senha']);
	if ($user) {
		$_SESSION['id'] = $user->id;
		$_SESSION['nome'] = $user->nome;
		$_SESSION['email'] = $user->email;
		$_SESSION['senha'] = $user->senha;
		$_SESSION['permissao'] = $user->permissao;
		if ($_SESSION('permissao') == 'admin') {
			echo "home.html";
		} else {
			echo "chat.html";
		}
	} else {
		echo "false";
	}
}
?>