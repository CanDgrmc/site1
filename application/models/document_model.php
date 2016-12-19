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
		$this->db->where('altkategori_id',$k);
		$query=$this->db->get();
		return $query->result();
	}
	function ustDocs($ustk){
		$this->db->from('documents');
		/* Get methoduyla alınan k değerine göre dbden veri çekier (bkz. controller kDocs func)*/
		$this->db->where('kategori_id',$ustk);
		$query=$this->db->get();
		return $query->result();
	}
}