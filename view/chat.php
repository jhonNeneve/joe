<?php include '../controller/core.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/cssChat.css">
	</link>
	<link rel="stylesheet" type="text/css" href="css/cssBasic.css">
	</link>
	<title>Chat Joe</title>

</head>

<body>
	<div id="header"></div>
	<section>
		<div class="card transparent z-depth-5">
			<ul class="chat-thread messages">
				<li>Olá, seja bem-vindo(a)! Como posso te ajudar?</li>
				<!-- <div class="messages"></div> -->
			</ul>
			<form class="chat-window">
				<input class="chat-window-message" name="chat-window-message" type="text" autocomplete="off"
					autofocus />
			</form>
		</div>
	</section>
	<div id="footer"></div>
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
<script type="text/javascript" src="js/jsBasic.js"></script>
<script type="text/javascript" src="js/jsChat.js"></script>

<script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
<script type="text/javascript" src="js/startRiver.js"></script>

</html>