<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DepositoController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('depositoModel');
	}

	public function index()
	{
		$this->load->view('inicio');
	}

	function guardar(){
		if($_POST) {
			$this->depositoModel->guardar($_POST);
		}
		$this->load->view('inicio');
	}

	function borrar(){
		$this->depositoModel->borrar($_GET);
		$this->load->view('inicio');
	}
}