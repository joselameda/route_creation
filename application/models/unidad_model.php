<?php
class Unidad_model extends CI_Model {

    public function get_unidad($id_usuario){
        $unidad=$this->db->where('id_usuario',$id_usuario)->get('unidad');
        return $unidad->result();    
    }
        public function get_unidad_admin(){
        $unidad=$this->db->get('unidad');
        return $unidad->result();    
    }
    public function agregar_unidad($unidad){
        $result=$this->db->insert('unidad',$unidad);
        return $result;
    }
    public function get_unidad_byid($id){
        $unidad=$this->db->where("id_unidad",$id)->get('unidad');
        return $unidad->row();    
    }
    public function editar_unidad($id,$unidad){
        $unidades=$this->db->where("id_unidad",$id)->update("unidad",$unidad);
        return $unidades;
    }
    public function eliminar_unidad($id){
        $unidad=$this->db->where("id_unidad",$id)->delete('unidad');
        return $unidad; 
    }
    public function get_usuario(){
        $this->db->select('unidad.*, usuario.email');
        $this->db->from('usuario');        
        $this->db->join('unidad','usuario.id_usuario=unidad.id_usuario','inner');
        $q=$this->db->get()->result();
        return $q;
    }
}