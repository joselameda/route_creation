<?php
class Login_model extends CI_Model {

    public function login($email,$password) {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('usuario');
        if ($query->num_rows()>0) {
            $q=$query->row();
            $this->session->set_userdata('name',$q->nombre);
            $this->session->set_userdata('email',$q->email);
            $this->session->set_userdata('id_usuario',$q->id_usuario);
            return true;
        }
        else {
            return false;
        }
    }
    public function enviar($email,$password,$nombre){
        $usuario=[
          "email"=>$email,
          "password"=>$password,
          "nombre"=>$nombre
        ];
        $result=$this->db->insert('usuario',$usuario);   
        return $result;
    }

}