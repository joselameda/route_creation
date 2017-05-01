<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rutas extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('email')) {
			header("location:".base_url()."index.php/home");
		}
        $this->load->model('rutas_model');
    }

	public function index(){
			$data['sidebar']="sidebar/rutas";
			$data['contenido']="rutas/ver";
		if ($this->session->userdata('name')=="admin" && $this->session->userdata('id_usuario')=="6") {
			$data['rutas']=$this->rutas_model->get_usuario();
			$this->load->view('template',$data);
			return;
		}
    	$data['rutas']=$this->rutas_model->get_rutas($this->session->userdata('id_usuario'));
		$this->load->view('template',$data);
	}
	public function ejecutar($operacion){
		$ruta["codigo"]=$_POST["codigo_ruta"];
		$ruta["nombre"]=$_POST['nombre_ruta'];
		$ruta["id_usuario"]=$this->session->userdata('id_usuario');
		if ($ruta["codigo"]=="" or $ruta["nombre"]==""){
			header("location:".base_url()."index.php/rutas/agregar");
			exit;
        }
		if ($operacion=="agregar") {
			$this->rutas_model->agregar_ruta($ruta);
			header("location:".base_url()."index.php/rutas");
		}
		elseif ($operacion=="editar") {
			$id=$_POST['id_ruta'];
			$this->rutas_model->editar_ruta($id,$ruta);	 
			header("location:".base_url()."index.php/rutas");			
		}
	

	}

    public function agregar(){
		$data['operacion']="agregar";
		$data['sidebar']="sidebar/rutas";
		$data['contenido']="rutas/formulario";
		$ruta=new stdClass();
		$ruta->id_rutas=0;
		$ruta->codigo="";
		$ruta->nombre="";
		$ruta->id_usuario=$this->session->userdata('id_usuario');		
		$data['ruta']=$ruta;
		$this->load->view('template', $data);       
    }
	public function editar($id_ruta){
		$data['operacion']="editar";
		$data['sidebar']="sidebar/rutas";
		$data['contenido']="rutas/formulario";
		$data['ruta']=$this->rutas_model->get_ruta_byid($id_ruta);
		$this->load->view('template',$data);
	}
	
	public function eliminar($id_ruta){
		$this->rutas_model->eliminar_ruta($id_ruta);
		header("location:".base_url()."index.php/rutas");	
	}
}
