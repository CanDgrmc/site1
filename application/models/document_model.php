<?php 
/**
* 
*/
class document_model extends CI_Model
{
	
	 function __construct()
    {
         parent::__construct();
    }

	function Docs($k){
		$this->db->from('documents');
		/* Get methoduyla alınan k değerine göre dbden veri çekier (bkz. controller kDocs func)*/
		$this->db->where('kategori_id',$k);
		$query=$this->db->get();
		return $query->result();
	}
}