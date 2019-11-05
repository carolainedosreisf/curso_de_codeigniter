<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

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
	public $titulo;
    public function __construct(){
        parent::__construct();
	}
	public function listar_categorias(){
		$this->db->order_by('titulo', 'ASC');
		return $this->db->get('categoria')->result();
	}
	public function listar_titulo($id){
		$this->db->from('categoria');
		$this->db->where('id ='.$id);
		return $this->db->get()->result();
	}
	public function adicionar($titulo){
		$dados['titulo'] = $titulo;
		return $this->db->insert('categoria', $dados);
	}
	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('categoria');
	}
	public function listar_categoria($id){
		$this->db->from('categoria');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->result();
	}
	public function alterar($titulo,$id){
		$dados['titulo'] = $titulo;
		$this->db->where('id',$id);
		return $this->db->update('categoria',$dados);
	}

	
   
}
