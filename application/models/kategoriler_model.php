<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kategoriler_model extends CI_Model
{
	 function __construct()
    {
         parent::__construct();
    }
	
	function kategoriler() {
		$query=$this->db->get('kategoriler');
		return $query->result();

	}
	function altkategoriler(){
		$query=$this->db->get('alt_kategoriler');
		return $query->result();
	}
	
}


