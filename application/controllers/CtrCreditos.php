<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCreditos extends CI_Controller {

	public function index()
	{
		$data["clientes"]  = "active";
		$data["title"]     = "Registros clientes";
		$data["subtitle"]  = "Registros de clientes y créditos";
		$data["contenido"] = "creditos/creditos";
		$data["menu"]      = "creditos/menu_creditos";
		$this->load->view('universal/plantilla',$data);
	}

	public function perfil_cliente()
	{
		$data["clientes"]  = "active";
		$data["title"]     = "Perfil cliente";
		$data["subtitle"]  = "Registros de datos y créditos";
		$data["contenido"] = "creditos/perfil_cliente";
		$data["menu"]      = "creditos/menu_creditos";
		$this->load->view('universal/plantilla',$data);
	}

	public function pagos()
	{
		$data["clientes"]  = "active";
		$data["title"]     = "Pagos del cliente";
		$data["subtitle"]  = "Registros de los pagos";
		$data["contenido"] = "creditos/pagos";
		$data["menu"]      = "creditos/menu_creditos";
		$this->load->view('universal/plantilla',$data);
	}

}