<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['site_baslik']="Can Dgrmc";
		$data['site_adi']= "Site Adı";
		$this->load->model('kategoriler_model');
		$data['kategoriler']=$this->kategoriler_model->kategoriler();
		$data['altkategoriler']=$this->kategoriler_model->altkategoriler();
		$this->load->view('navbar',$data);
		$this->load->view('header',$data);
		$this->load->view('icerik_anasayfa');
	}
	public function Docs(){
		$data['site_baslik']="Can Dgrmc";
		$data['site_adi']= "Site Adı";
		$this->load->model('kategoriler_model');
		$data['kategoriler']=$this->kategoriler_model->kategoriler();
		$data['altkategoriler']=$this->kategoriler_model->altkategoriler();
		$this->load->view('navbar',$data);
		$this->load->view('icerik_dokuman');

	}
	public function kDocs(){
		$kid=$this->input->get('k');
		$this->load->model('document_model');
		$data['makaleler']=$this->document_model->Docs($kid);
		$data['site_baslik']="Can Dgrmc";
		$data['site_adi']= "Site Adı";
		$this->load->model('kategoriler_model');
		$data['kategoriler']=$this->kategoriler_model->kategoriler();
		$data['altkategoriler']=$this->kategoriler_model->altkategoriler();
		$this->load->view('navbar',$data);
		$this->load->view('header',$data);
		$this->load->view('icerik_docs',$data);



	}
}
