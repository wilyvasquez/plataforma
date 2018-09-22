<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class ModeloCreditos extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	/*function pagos(){
		$query=$this->db->query("SELECT * FROM graficas ");
		if ($query->num_rows() > 0) {
			return $query;
		}else{ 
			return false;
		}
	}*/

}

?>