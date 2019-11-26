<?php include '../controller/core.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css"></link>
	<link rel="stylesheet" type="text/css" href="css/cssBasic.css" ></link>

	<title>Chat Joe</title>
</head>
<body class="p-b-50 p-relative">
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
	<section class="grey lighten-4" style="margin-left: 207px;min-height: calc(100vh - 114px);">
		<nav>
			<div class="nav-wrapper deep-purple lighten-1">
				<div class="col s12 p-l-15">
					<a href="home.html" class="breadcrumb">Home</a>
					<a href="module.html" class="breadcrumb">Módulo</a>
				</div>
			</div>
		</nav>
		<div class="row m-b-0">
			<div class="col s12">
				<div class="card m-t-15">
					<div class="row m-0">
						<div class="col s12" style="padding: 10px 20px;">
							<a href="#modal1" class="btn-floating waves-effect waves-light tooltipped right modal-trigger" data-position="top" data-tooltip="Novo módulo">
								<i class="material-icons">add</i>
							</a>
						</div>
					</div>
					<div class="row m-0">
						<div class="col s12 p-0">
							<table class="highlight centered responsive-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th style="width: 500px;">Descrição</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody id="tbody"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Novo módulo</h4>
      <div class="row">
        <div class="input-field col s12">
          <input id="modal-nome" type="text">
          <label for="modal-nome">Nome do módulo</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="modal-descricao" class="materialize-textarea"></textarea>
          <label for="textarea1">Descrição</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select multiple id="modal-permitidos">
            <option value="" disabled>Selecione</option>
          </select>
          <label>Usuários permitidos</label>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="javascript:void(0)" class="modal-close waves-effect waves-grey btn-flat">Cancelar</a>
      <a href="javascript:void(0)" class="modal-close waves-effect waves-green btn-flat" onclick="newModule();">Salvar</a>
    </div>
  </div>
  <div id="footer"></div>
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
<script type="text/javascript" src="js/jsBasic.js"></script>
<script type="text/javascript" src="js/jsModule.js"></script>
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