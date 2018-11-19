<?php
$CI =& get_instance();
	if ($this->uri->segment(3) == 0) {
		$depo[0]['nombre'] = "";
		$depo[0]['contenido'] = "";
		$depo[0]['cantidad'] = "";
		$depo[0]['precio'] = "";
	}else{
		$CI->db->where('id', $this->uri->segment(3));
		$depo = $CI->db->get('deposito')->result_array();

	}
?>

<?php
$CI =& get_instance();
	if ($this->uri->segment(3) == 0) {
		$carro[0]['id'] = "";
		$carro[0]['Nombre'] = "";
		$carro[0]['Contenido'] = "";
		$carro[0]['Cantidad'] = "";
		
	}else{
		$CI->db->where('id', $this->uri->segment(3));
		$carro = $CI->db->get('carrito')->result_array();

	}
?>

<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel default">
					<div class="panel-heading">Productos Disponibles</div>
					<div class="panel-body">
						<table class="table table-hover table-striped">
							<thead>
								<th>Nombre</th>
								<th>Contenido</th>
								<th>Precio</th>
								<th></th>
							</thead>
							<tbody>
								<?php
									$deposito = $CI->db->get('deposito')->result_array();
									

									foreach ($deposito as $depo) {
											$rutaguardar = base_url("depositoController/guardar2/{$depo['id']}");
										echo "<tr>
												<td>{$depo['nombre']}</td>
												<td>{$depo['contenido']}</td>
												<td>{$depo['precio']}</td>
												<td>
												<a href='{$rutaguardar}' class='btn btn-success glyphicon glyphicon-shopping-cart'></a>
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

			<div class="col-md-8">
				<div class="panel panel default">
					<div class="panel-heading">Productos Agregados al Carrito</div>
					<div class="panel-body">
						<table class="table table-hover table-striped">
							<thead>
								<th>Nombre</th>
								<th>Contenido</th>
								<th>Cantidad</th>
							</thead>
							<tbody>
								<?php
									$carrito = $CI->db->get('carrito')->result_array();

									foreach ($carrito as $carro) {
										
										echo "<tr>
												<td>{$carro['Nombre']}</td>
												<td>{$carro['Contenido']}</td>
												<td>{$carro['Cantidad']}</td>
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




