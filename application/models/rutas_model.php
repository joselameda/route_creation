<?php
class Rutas_model extends CI_Model {

    public function get_rutas($id_usuario){
        $rutas=$this->db->where('id_usuario',$id_usuario)->get('rutas');
        return $rutas->result();    
    }    
    public function get_rutas_admin(){
        $rutas=$this->db->get('rutas');
        return $rutas->result();    
    }
    public function agregar_ruta($ruta){
        $result=$this->db->insert('rutas',$ruta);
        return $result;
    }
    public function get_ruta_byid($id){
        $rutas=$this->db->where("id_rutas",$id)->get('rutas');
        return $rutas->row();    
    }
    public function editar_ruta($id,$ruta){
        $rutas=$this->db->where("id_rutas",$id)->update("rutas",$ruta);
        return $rutas;
    }
    public function eliminar_ruta($id){
        $rutas=$this->db->where("id_rutas",$id)->delete('rutas');
        return $rutas; 
    }
    public function get_usuario(){
        $this->db->select('rutas.*, usuario.email');
        $this->db->from('usuario');        
        $this->db->join('rutas','usuario.id_usuario=rutas.id_usuario','inner');
        $q=$this->db->get()->result();
        return $q;
    }
}