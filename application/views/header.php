<!DOCTYPE html>
<html lang="en">
<head>
	<title>Deposito</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

<style>
	tr {
		width: 100%;
		display: inline-table;
		table-layout: fixed;
	}

	table{
		height: 300px;
		display: -moz-groupbox;
	}
	tbody{
		overflow-y: scroll;
		height: 295px;
		width: 94%;
		position: absolute;
	}

	html{
		min-height: 100%;
		position: relative;
	}
	.header {
		background-color: #D50000;
	}
	h1{
		font-size: 50px;
		color: #000000;
	}
	body{
		margin: 0;
		margin-bottom: 120px;
		background-color: #FFFFFF;
	}
	.panel-default{
		background-color: #e0e0e0;
		border: 1px solid #BDBDBD;
	}
	.footer {
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 100px;
		line-height: 100px;
		background-color: #424242;
	}
</style>

</head>
<body>
<header class="header">
<div class="row">
	<div class="col-md-4">
		<img src="<?php echo base_url("/uploads/imagenes/Tecate.jpg") ?>" style="float: left; width: 100px; height: 100px;">
	</div>
		
	<div class="col-md-4 text-center">
		
		<h1>Deposito Jam</h1>
	</div>
</div>
<div class="text-center">
	<a href="<?= base_url("depositoController/index") ?>" class="btn btn-danger">Inicio</a>
	<a href="<?= base_url("depositoController/productos") ?>" class="btn btn-danger">Productos</a>
	<a href="#ventana1" class="btn btn-danger" data-toggle="modal">Administrador</a>
	<div class="modal fade" id="ventana1">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- header de la ventana--> 
				<div class="modal-header">
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Login del administrador</h4>
				</div>
				<!-- Contenido de la ventana--> 
				<div class="modal-body">
					<div>
						<label for="Usuario"> Usuario</label>
						<input id="Usuario"
						type="text"
						name="Usuario">	
					</div>
					<div>
						<label for="Contraseña"> Contraseña</label>
						<input id="Contraseña"
						type="text"
						name="Contraseña">	
					</div>
				</div>
				<!-- footer de la ventana--> 
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<a href="<?= base_url("depositoController/administrador") ?>" class="btn btn-danger">Entrar</a> 
				</div>
			</div>
		</div>
	</div>
</div>
</header>
