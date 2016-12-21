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
		/*$this->db->from('mesajlar');
		$this->db->where('okundu',0);*/
		$query=$this->db->get('mesajlar');
		return $query->result();
	}
	function mesajSil($id){
		$data['id']=$id;
		$this->db->delete('mesajlar',$data);
	}
	function tumunuSil(){
		$this->db->empty_table('mesajlar');
	}
	function tumuOkundu(){
		$data['okundu']=1;
		$this->db->update_batch('mesajlar',$data);
	}
	function okundu($id){
		$this->db->where('id',$id);
		$data['okundu']=1;
		$this->db->update('mesajlar',$data);
	}

}