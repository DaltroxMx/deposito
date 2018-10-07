<?php
$CI =& get_instance();
	if ($this->uri->segment(3) == 0) {
		$depo[0]['id'] = "";
		$depo[0]['nombre'] = "";
		$depo[0]['precio'] = "";
	}else{
		$CI->db->where('id', $this->uri->segment(3));
		$depo = $CI->db->get('deposito')->result_array();

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Deposito</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
	h1{
		font-size: 50px;
		color:#616161;
	}
	body{
		margin: 0;
		margin-bottom: 120px;
		background-color: #e0e0e0;
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Gestor del Deposito</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="panel panel default">
					<div class="panel-heading">Agregar Productos</div>
					<div class="panel-body">
						<form action="<?= base_url('depositoController/guardar') ?>" method="post">
						<!-- -------------------------------------------------- -->

							<div class="col-md-12 form-group input-group">
								<input type="HIDDEN" name="id" class="form-control" value="<?= $depo[0]['id'] ?>">
							</div>
						<!-- --------------------------------------------------------- -->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre</label>
								<input required type="text" name="nombre" class="form-control" value="<?= $depo[0]['nombre'] ?>">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Precio</label>
								<input required type="text" name="precio" class="form-control" value="<?= $depo[0]['precio'] ?>">
							</div>
							<div class="col-md-12 text-center">
								<a href="<?= base_url("depositoController/guardar/0") ?>" class="btn btn-primary">Nuevo Producto</a>
								<button type="submit" class="btn-success">Guardar Producto</button>
							</div>

						</form>
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel default">
					<div class="panel-heading">Productos agregados</div>
					<div class="panel-body">
						<table class="table table-hover table-striped">
							<thead>
								<th>ID</th>
								<th>Nombre</th>
								<th>Precio</th>
								<th></th>
							</thead>
							<tbody>
								<?php
									$deposito = $CI->db->get('deposito')->result_array();

									foreach ($deposito as $depo) {

										$rutaEditar = base_url("depositoController/guardar/{$depo['id']}");
										$rutaBorrar = base_url("depositoController/borrar?borrar=/{$depo['id']}");
										echo "<tr>
												<td>{$depo['id']}</td>
												<td>{$depo['nombre']}</td>
												<td>{$depo['precio']}</td>

												<td>
													<a href='{$rutaEditar}' class='btn btn-info glyphicon glyphicon-pencil'></a>
													<a href='{$rutaBorrar}' onclick='return confirm(\"Seguro que desea eliminar esta pelicula?\")'  class='btn btn-danger glyphicon glyphicon-remove'></a>
												</td>

										</tr>
										";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>

		</div>
	</div>

<footer class="footer">
	<div class="container text-center">
		<span class="text-muted">Derechos Reservados | Angel Ivan - Jovanny Ismael (2018-Hasta que nos muramos por la UPP)</span>
	</div>
</footer>	
</body>
</html>
