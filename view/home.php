<?php include '../controller/core.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/cssHome.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<link rel="stylesheet" type="text/css" href="css/cssBasic.css">
		<title>Chat Joe</title>
	</head>

	<body>
		<div id="loading">
			<div class="preloader-wrapper big active">
				<div class="spinner-layer spinner-blue-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div><div class="gap-patch">
						<div class="circle"></div>
					</div><div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
		<div id="header"></div>
		<div id="menu"></div>
		<!-- trocar para porcentagem -->
		<section class="sectionCSS" style="position: relative !important;min-height: calc(100vh - 143px);">
			<div class="row">
			<div id="cardFlow"></div>          
			</div>
		</section>
		<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

		<div id="footer" style="position:inherit;"></div>
	</body>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="js/jsHome.js"></script>
	<script type="text/javascript" src="js/jsBasic.js"></script>
	<script type="text/javascript">
	function menu(menu) {
		if (menu === 'home') {
			window.location.replace('home.html');
		} else if (menu === 'module') {
			window.location.replace('module.html');
		} else {
			window.location.replace('flow.php');
		}
	}
	</script>
</html>