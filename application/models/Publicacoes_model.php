<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacoes_model extends CI_Model {

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

	public $id;
	public $categoria;
	public $titulo;
	public $subtitulo;
	public $conteudo;
	public $data;
	public $img;
	public $user;


    public function __construct(){
        parent::__construct();
	}
	public function destaques_home(){
		$this->db->select('usuario.id as idautor,
			usuario.nome, postagens.id, postagens.titulo,
			postagens.subtitulo, postagens.user, postagens.data, postagens.img');
		$this->db->from('postagens');
		$this->db->join('usuario', 'usuario.id = postagens.user');
		$this->db->limit(4);
		$this->db->order_by('data', 'DESC');
		return $this->db->get()->result();
	}
	public function categoria_pub($id){
		$this->db->select('usuario.id as idautor,
			usuario.nome, postagens.id, postagens.titulo,
			postagens.subtitulo, postagens.user, postagens.data, postagens.img, 
			postagens.categoria');
		$this->db->from('postagens');
		$this->db->join('usuario', 'usuario.id = postagens.user');
		$this->db->where('postagens.categoria ='.$id);
		$this->db->order_by('data', 'DESC');
		return $this->db->get()->result();
	}

	
   
}
