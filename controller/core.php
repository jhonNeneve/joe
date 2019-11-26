<?php
session_start();
if (!isset($_SESSION['id'])) {
	if ($_SESSION['permissao'] == 'admin') {
		if ($_SERVER["REQUEST_URI"] == '/joe/view/chat.php') {
			header('Location: ../view/home.php');
		}
	} else {
		if ($_SERVER["REQUEST_URI"] != '/joe/view/chat.php') {
			header('Location: ../view/chat.php');
		}
	}
	header('Location: ../view/login.html');
}
?>