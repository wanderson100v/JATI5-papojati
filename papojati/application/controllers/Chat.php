<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller{

    public function index(){
        
    }

    public function sala($id_usuario = 0){
        if($id_usuario != 0){
            $this->load->model("usuario_model");
            $this->load->model("mensagem_model");
            $usuarios = $this->usuario_model->get_all();
            $usuario_logado = $this->usuario_model->get_id($id_usuario);
            $mesagems = $this->mensagem_model->get_all();
            
            $this->load->view('page_top');
            $this->load->view('chat_view', 
            array(
                "usuarios" => $usuarios,
                "usuario_logado" => $usuario_logado,
                "mensagens" => $mesagems
            ));
            $this->load->view('page_bottom');
        }
      
    }


    public function enviar($id_usuario = -1){
        if($id_usuario != -1){
            $texto = $this->input->post("texto");
            $this->load->model("mensagem_model");
            $this->mensagem_model->create($texto , $id_usuario);
            redirect(site_url("chat/sala/".$id_usuario));
        }
    }

}