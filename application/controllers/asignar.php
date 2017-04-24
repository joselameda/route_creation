<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignar extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('email')) {
			header("location:".base_url()."index.php/home");
		}
    }
    public function index(){
        $data["contenido"]="registrar/formulario"; 
        $data['sidebar']='sidebar/unidad'  ;
        $this->load->view("template",$data);       
     }

} 