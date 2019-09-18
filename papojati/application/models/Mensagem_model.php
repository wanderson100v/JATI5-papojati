<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mensagem_model extends CI_model{

    public $id;

    public $texto;

    public $id_usuario;


    public function create($texto, $id_usuario)
    {
        $this->db->insert('mensagem', 
            array(
                'texto' => $texto,
                'id_usuario' => $id_usuario
            ));
    }


     public function get_all()
    {
        $this->db->select("usuario.login, mensagem.texto");
        $this->db->from("mensagem");
        $this->db->join("usuario", "mensagem.id_usuario = usuario.id");
        $query = $this->db->get();
        return $query->result_array();
    }
}