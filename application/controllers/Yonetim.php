<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim extends CI_Controller {

	public function Login(){
		$data['site_baslik']="Can Dgrmc";
		$data['site_adi']= "Site Adı";
		$this->load->view('login');
		$this->load->view('header');

	}

	public function verifyUsr(){

	}

	function adminPanel(){
		$this->load->model('document_model');
		$data['makaleler']=$this->document_model->allDocs();
		$this->load->model('document_model');
		$data['onay']=$this->document_model->onayBekleyen();
		$data['lastPosts']=$this->document_model->lastPosts();
		$this->load->model('message_model');
		$data['mesajlar']=$this->message_model->mesajlar();
		$this->load->view('yntm/yntheader');
		$this->load->view('yntm/sidebar',$data);
		$this->load->view('yntm/dashboard',$data);
	}
	function mesajlar(){
		$this->load->model('document_model');
		$data['makaleler']=$this->document_model->allDocs();
		$this->load->model('document_model');
		$data['onay']=$this->document_model->onayBekleyen();
		$this->load->model('message_model');
		$data['mesajlar']=$this->message_model->mesajlar();
		$this->load->view('yntm/yntheader');
		$this->load->view('yntm/sidebar',$data);
		$this->load->view('yntm/messages',$data);
	}
	function mesajSil(){
		$sil=$this->input->get('id');
		$this->load->model('message_model');
		$this->message_model->mesajSil($sil);
		redirect('Yonetim/mesajlar');
	}
	function tumunuSil(){
		$this->load->model('message_model');
		$this->message_model->tumunuSil();
		redirect('Yonetim/mesajlar');
	}
	function tumuOkundu(){
		$this->load->model('message_model');
		$this->message_model->tumuOkundu();
		redirect('Yonetim/mesajlar');
	}
	function postOnay(){
		$this->load->model('document_model');
		$data['makaleler']=$this->document_model->allDocs();
		$this->load->model('document_model');
		$data['onay']=$this->document_model->onayBekleyen();
		$this->load->model('message_model');
		$data['mesajlar']=$this->message_model->mesajlar();
		$this->load->view('yntm/yntheader');
		$this->load->view('yntm/sidebar',$data);
		$this->load->view('yntm/makaleonay',$data);
	}
	function read(){
		$id=$this->input->get('id');
		$this->load->model('message_model');
		$this->message_model->okundu($id);
		redirect('Yonetim/mesajlar');
	}
	function makaleler(){
		$this->load->model('document_model');
		$data['makaleler']=$this->document_model->allDocs();
		$this->load->model('document_model');
		$data['onay']=$this->document_model->onayBekleyen();
		$this->load->model('message_model');
		$data['mesajlar']=$this->message_model->mesajlar();
		$this->load->view('yntm/yntheader');
		$this->load->view('yntm/sidebar',$data);
		$this->load->view('yntm/makaleler',$data);	
	}


}