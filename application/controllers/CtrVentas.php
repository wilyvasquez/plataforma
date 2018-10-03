<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrVentas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('creditos_model');
	}

	public function index()
	{
		$this->load->view('ventas/principal');
	}

}