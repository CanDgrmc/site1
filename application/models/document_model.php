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
	function allDocs(){
		$query=$this->db->get('documents');
		return $query->result();
	}
	function onayBekleyen(){
		$this->db->from('documents');
		$this->db->where('yayınlanma',0);
		$query=$this->db->get();
		return $query->result();
	}
	function lastPosts(){
		$this->db->from('documents');
		$this->db->order_by('date','DESC');
		$this->db->limit(3);
		$query=$this->db->get();
		return $query->result();
	}
	function makaleSil($id){
		$data['id']=$id;
		$this->db->delete('documents',$data);
	}
	function makaleOnay($id){
		$this->db->where('id',$id);
		$data['yayınlanma']=1;
		$this->db->update('documents',$data);
	}
}