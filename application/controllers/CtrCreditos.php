<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCreditos extends CI_Controller {

	public function index()
	{
		$data["contenido"] = "creditos/creditos";
		$data["menu"]      = "creditos/menu_creditos";
		$this->load->view('universal/plantilla',$data);
	}
}