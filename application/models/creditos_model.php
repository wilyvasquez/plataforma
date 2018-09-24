<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class creditos_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function clientes(){
		$query=$this->db->get("usuarios");
		if ($query->num_rows() > 0) {
			return $query;
		}else{ 
			return false;
		}
	}

}

?>