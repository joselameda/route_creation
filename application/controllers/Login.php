<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    	
	function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function login(){
        if ($this->session->userdata('email')) {
            header("location:".base_url()."index.php/rutas");
        }
        if (isset($_POST['password'])) {        
             if ($this->login_model->login($_POST['email'],$_POST['password'])) {
                header("location:".base_url()."index.php/rutas");
            } 
            else {
                header("location:".base_url()."index.php/home");
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        header("location:".base_url()."index.php/rutas");    
    }    

    public function registrar(){
        $data['contenido']="registrar/formulario";
       $this->load->view('template',$data);
    }

    public function enviar(){
        if ($_POST['email']=="" or $_POST['password']=="") {
            header("location:".base_url()."index.php/login/registrar");
            exit;
        }
        if ($_POST['email']== $_POST['email2']) {
                if ($_POST['password']==$_POST['password2']) {
                $this->login_model->enviar($_POST['email'],$_POST['password'],$_POST['nombre']);
                header("location:".base_url()."index.php/home");
                }
                else {
                    header("location:".base_url()."index.php/login/registrar");
                        exit; 
                }
        }
        else {
           header("location:".base_url()."index.php/login/registrar");
            exit; 
        }
    }
}