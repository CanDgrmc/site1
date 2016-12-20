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
	


}