<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DepositoController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('depositoModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('principal');
		$this->load->view('footer');
	}
	public function administrador(){
		$this->load->view('headeradmon');
		$this->load->view('inicio');
		$this->load->view('footer');
	}
	public function productos(){
		$this->load->view('header');
		$this->load->view('productos');
		$this->load->view('footer');
	}
	public function listacompra(){
		$this->load->view('header');
		$this->load->view('lista');
		$this->load->view('footer');
	}

	function guardar(){
		if($_POST) {
			$this->depositoModel->guardar($_POST);
		}
		$this->load->view('headeradmon');
		$this->load->view('inicio');
		$this->load->view('footer');
	}

	function guardar2(){
		if($_POST){
			$this->depositoModel->guardar2($_POST);
		}
		$this->load->view('header');
		$this->load->view('productos');
		$this->load->view('footer');
	}

	public function borrar($id){
		$this->depositoModel->borrar($id);
		redirect(base_url("depositoController/administrador"));
	}

}