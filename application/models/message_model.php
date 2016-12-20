<?php 

/**
* 
*/
class message_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function mesajlar(){
		$this->db->from('mesajlar');
		$this->db->where('okundu',0);
		$query=$this->db->get();
		return $query->result();
	}
}