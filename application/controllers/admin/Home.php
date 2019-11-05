<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('index.php/admin'));//arrumar essa rota
		}
    }

	public function index()
	{
		

		//dados a serem enviados para o cabeçalho
		$dados['titulo'] = 'Painel de controle';
		$dados['subtitulo'] = 'Home';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/header');
		$this->load->view('backend/home');
		$this->load->view('backend/template/html-footer');
    }
   
}
