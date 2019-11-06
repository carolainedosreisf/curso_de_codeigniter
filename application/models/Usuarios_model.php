<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

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
	public $nome;
	public $email;
	public $img;
	public $historico;
	public $user;
	public $senha;

    public function __construct(){
        parent::__construct();
	}
	
	public function listar_autor($id){
		$this->db->select('id,nome,historico,img');
		$this->db->from('usuario');
		$this->db->where('id ='.$id);
		return $this->db->get()->result();
	}
	public function listar_autores(){
		$this->db->select('id,nome,img');
		$this->db->from('usuario');
		$this->db->order_by('nome', 'ASC');
		return $this->db->get()->result();
	}

	public function adicionar($nome,$email,$historico,$user,$senha){
		$dados['nome'] = $nome;
		$dados['email'] = $email;
		$dados['historico'] = $historico;
		$dados['user'] = $user;
		$dados['senha'] = md5($senha);
		return $this->db->insert('usuario', $dados);
	}
	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('usuario');
	}
	public function listar_usuarios($id){
		$this->db->select('id,nome,historico,email,user,img');
		$this->db->from('usuario');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->result();
	}
	public function alterar($nome,$email,$historico,$user,$senha, $id){
		$dados['nome'] = $nome;
		$dados['email'] = $email;
		$dados['historico'] = $historico;
		$dados['user'] = $user;
		$dados['senha'] = md5($senha);
		$this->db->where('id',$id);
		return $this->db->update('usuario',$dados);
	}
	public function alterar_img($id){
		$dados['img'] = 1;
		$this->db->where('md5(id)',$id);
		return $this->db->update('usuario',$dados);
	}
   
}
