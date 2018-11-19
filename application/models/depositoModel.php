<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DepositoModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function guardar($post){
		$datosProducto = array();
		$datosProducto['id'] = $post['id'];
		$datosProducto['nombre'] = $post['nombre'];
		$datosProducto['contenido'] = $post['contenido'];
		$datosProducto['cantidad'] = $post['cantidad'];
		$datosProducto['precio'] = $post['precio'];
		//$datosProducto['imagen'] = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
		
	
		if($datosProducto['id'] > 0){
			$this->db->where('id', $datosProducto['id']);
			$this->db->update('deposito', $datosProducto);
			$ruta = base_url('depositoController/administrador');
			echo "<script>
				alert('Producto modificado satisfactoriamente.');
				window.location = '{$ruta}';
				</script>";
		}else{
			$this->db->insert('deposito', $datosProducto);
			$ruta = base_url('depositoController/administrador');
			echo "<script>
				alert('Producto guardado satisfactoriamente.');
				window.location = '{$ruta}';
				</script>";
		}
		

	}

	function guardar2($id){
		$datosCarrito = array();
		$datosCarrito['id'] = $post['id'];
		$datosCarrito['Nombre'] = $post['Nombre'];
		$datosCarrito['Contenido'] = $post['Contenido'];
		$datosCarrito['Cantidad'] = $post['Cantidad'];
		
		//$datosProducto['imagen'] = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
		
	
		
			$this->db->insert('carrito', $datosCarrito);
			$ruta = base_url('depositoController/productos');
		
		

	}

	function borrar($id){
		$this->db->where('id', $id);
		$this->db->delete('deposito');
		echo "<script>
				alert('Producto eliminado satisfactoriamente.');
				window.location = '{$ruta}';
				</script>";
	}


}