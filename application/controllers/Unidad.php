<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unidad extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('email')) {
			header("location:".base_url()."index.php/rutas");
		}
        $this->load->model('unidad_model');

    }

	public function index()
	{
		$data['sidebar']="sidebar/unidad";
		$data['contenido']="unidad/ver";
		if ($this->session->userdata('name')=="admin" && $this->session->userdata('id_usuario')=="6") {
			$data['unidad']=$this->unidad_model->get_usuario();
			$this->load->view('template',$data);
			return;
		}
    	$data['unidad']=$this->unidad_model->get_unidad($this->session->userdata('id_usuario'));
		$this->load->view('template',$data);
	}
	public function ejecutar($operacion){
		$unidad["marca"]=$_POST["marca"];
		$unidad["modelo"]=$_POST['modelo'];
		$unidad["patente"]=$_POST['patente'];
		$unidad["id_usuario"]=$this->session->userdata('id_usuario');
        if ($unidad["marca"]=="" or $unidad["modelo"]=="" or $unidad["patente"]=="" ) {
            header("location:".base_url()."index.php/unidad/agregar");
            exit;
        }
        $id=$_POST['id_unidad'];
		if ($operacion=="agregar") {
			$this->unidad_model->agregar_unidad($unidad);
			header("location:".base_url()."index.php/unidad");
		}
		elseif ($operacion=="editar") {
			$id=$_POST['id_unidad'];
			$this->unidad_model->editar_unidad($id,$unidad);	 
			header("location:".base_url()."index.php/unidad");			
		}
	}

    public function agregar(){
		$data['operacion']="agregar";
		$data['sidebar']="sidebar/unidad";
		$data['contenido']="unidad/formulario";
		$unidad=new stdClass();
		$unidad->id_unidad=0;
		$unidad->marca="";
		$unidad->modelo="";		
		$unidad->patente="";	
		$data['unidad']=$unidad;
		$this->load->view('template', $data);       
    }
	public function editar($id_unidad){
		$data['operacion']="editar";
		$data['sidebar']="sidebar/unidad";
		$data['contenido']="unidad/formulario";
		$data['unidad']=$this->unidad_model->get_unidad_byid($id_unidad);
		$this->load->view('template',$data);
	}
	
	public function eliminar($id_unidad){
		$this->unidad_model->eliminar_unidad($id_unidad);
		header("location:".base_url()."index.php/unidad");	
	}
}
