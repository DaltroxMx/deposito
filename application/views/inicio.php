<?php
$CI =& get_instance();
	if ($this->uri->segment(3) == 0) {
		$depo[0]['id'] = "";
		$depo[0]['nombre'] = "";
		$depo[0]['contenido'] = "";
		$depo[0]['cantidad'] = "";
		$depo[0]['precio'] = "";
		//$depo[0]['imagen'] = "";
	}else{
		$CI->db->where('id', $this->uri->segment(3));
		$depo = $CI->db->get('deposito')->result_array();

	}
?>
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
						<form action="<?= base_url('depositoController/guardar') ?>" method="POST" enctype="multipart/form-data">
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
								<label for="" class="input-group-addon">Contenido</label>
								<input required type="text" name="contenido" class="form-control" value="<?= $depo[0]['contenido'] ?>">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Cantidad/Stock</label>
								<input required type="number" name="cantidad" class="form-control" value="<?= $depo[0]['cantidad'] ?>">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Precio</label>
								<input required type="number" name="precio" class="form-control" value="<?= $depo[0]['precio'] ?>">
							</div>
							
							<div class="col-md-12 text-center">
								<a href="<?= base_url("depositoController/guardar/0") ?>" class="btn btn-primary">Nuevo Producto</a>
								<button type="submit" class="btn-success">Guardar Producto</button>
							</div>
						</form>
					</div>
				</div>
					<div class="col-md-12 text-center">
					<a href="<?= base_url("depositoController/index") ?>" class="btn btn-danger">Salir</a>
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
								<th>Contenido</th>
								<th>Cantidad/Stock</th>
								<th>Precio</th>
								<th></th>
							</thead>
							<tbody>
								<?php
									$deposito = $CI->db->get('deposito')->result_array();

									foreach ($deposito as $depo) {

										$rutaEditar = base_url("depositoController/guardar/{$depo['id']}");
										$rutaBorrar = base_url("depositoController/borrar/{$depo['id']}");
										echo "<tr>
												<td>{$depo['id']}</td>
												<td>{$depo['nombre']}</td>
												<td>{$depo['contenido']}</td>
												<td>{$depo['cantidad']}</td>
												<td>{$depo['precio']}</td>
												

												<td>
													<a href='{$rutaEditar}' class='btn btn-info glyphicon glyphicon-pencil'></a>
													<a href='{$rutaBorrar}' onclick='return confirm(\"Seguro que desea eliminar este producto?\")'  class='btn btn-danger glyphicon glyphicon-remove'></a>
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

