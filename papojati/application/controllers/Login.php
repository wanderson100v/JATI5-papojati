<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		redirect(site_url("login/l"));
	}

	public function l($erro = ""){
		$this->load->view('page_top');
		if(!empty($erro))
			$this->load->view('login_view', array('erro' => "Você não foi cadastrado"));
		else
			$this->load->view('login_view');
		$this->load->view('page_bottom');
	}

	public function logar(){
		$login = $this->input->post("login");
		
		if(empty($login)){
			redirect(site_url("login/l/1"));
		}
		
		$this->load->model("usuario_model");
		$inserido = $this->usuario_model->create($login);
		
		if($inserido != 0){
			redirect(site_url("chat/sala/".$inserido));
		}else{
			redirect(site_url("login/l/1"));
		}
	}
}
