<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignar extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('email')) {
			header("location:".base_url()."index.php/home");
		}
        $this->load->model('rutas_model');
        $this->load->model('unidad_model');
    }
    public function index(){
        $data["contenido"]="registrar/fecha"; 
        $data['sidebar']='sidebar/asignar'  ;
        $this->load->view("template",$data);       
     }

     public function asignar(){
        $data['fecha']=$_POST['fecha'];
        $data['contenido']="registrar/asignar";
        $data['sidebar']="sidebar/asignar";
        $data['rutas']=$this->rutas_model->get_rutas($this->session->userdata('id_usuario'));
        $data['unidad']=$this->unidad_model->get_unidad($this->session->userdata('id_usuario'));
        $this->load->view('template',$data);

     }
} 