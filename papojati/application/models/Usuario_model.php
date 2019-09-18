<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_model{

    public $id;

    public $login;

    
    public function create($login)
    {
        if($this->db->insert('usuario', 
            array(
                'login' => $login
            )))
            return $this->db->insert_id() ;
        else
            return 0;
    }


     public function get_all()
    {
        $query = $this->db->get('usuario');
        return $query->result_array();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("usuario");
        $this->db->where("usuario.id", $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}