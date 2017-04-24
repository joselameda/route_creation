<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<style>	
		.padding{
			padding-top: 50px;
		}

	</style>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>css/bootstrap-datepicker.min.css" rel="stylesheet">
	<script src="<?=base_url()?>js/jquery-3.2.0.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap-datepicker.min.js"></script>	
	<title>PLANIFICADOR DE RUTAS</title>


</head>
<body>
	<?php if ($this->session->userdata('email')):?> {
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand">PLANIFICADOR DE RUTAS</a>
					<ul class="nav navbar-nav">
						<li ><a href="<?=base_url()?>index.php/rutas">Rutas </a></li>
						<li><a href="<?=base_url()?>index.php/unidad">Unidad </a></li>
						<li><a href="<?=base_url()?>index.php/asignar">Asignar Rutas</a></li>
					</ul>		
				</div>
				<div class="navbar-right" style="padding-right:10px">
					<p class="navbar-text"><?=$this->session->userdata('name')?></p>
					<a href="<?=base_url()?>index.php/login/logout" class="btn btn-danger navbar-btn">Logout</a>
				</div>
			</div>
		</nav>
		<div class="container-fluid padding">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar" id="barrala">
						<?php $this->load->view($sidebar); ?>
					
				</div>
				<div class="col-sm-9 col-md-10">
						<?php $this->load->view($contenido); ?>
				</div>
			</div>
		</div>	
	<?php else:?> {
		<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand">PLANIFICADOR DE RUTAS</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<form class="navbar-form navbar-right" action="<?=base_url()?>index.php/login/login"  method="post">
							<div class="form-group">
								<input name="email" type="text" placeholder="email" class="form-control" >
							</div>
							<div class="form-group">
								<input  name="password" type="password" placeholder="password" class="form-control">
							</div>
							<button type="submit" class="btn btn-success">Sign in</button>
							<a href="<?=base_url()?>index.php/login/registrar">Registrar</a>
						</form>
					</div>
				</div>
			</nav>
		<div class="container_fluid padding">
			<div class="row">
				<div class="col-sm-12 col-md-12">
						<?php $this->load->view($contenido); ?>
				</div>
			</div>
		</div>	
	<?php endif?>



</body>
</html>