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
		$datosProducto['precio'] = $post['precio'];
		
	
		if($datosProducto['id'] > 0){
			$this->db->where('id', $datosProducto['id']);
			$this->db->update('deposito', $datosProducto);
			$ruta = base_url('depositoController');
			echo "<script>
				alert('Factura modificada satisfactoriamente.');
				window.location = '{$ruta}';
				</script>";
		}else{
			$this->db->insert('deposito', $datosProducto);
			$ruta = base_url('depositoController');
			echo "<script>
				alert('Factura guardada satisfactoriamente.');
				window.location = '{$ruta}';
				</script>";
		}
		

	}

	function borrar($get){
		$this->db->where('id', $get['borrar']);
		$this->db->delete('deposito');
	}

}