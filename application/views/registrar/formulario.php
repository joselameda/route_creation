<form class="form-horizontal" action="<?=base_url()?>index.php/login/enviar" method="post">
<fieldset>


<legend class="text-center">Registrar Usuario</legend >

<div class="form-group">
  <label class="col-md-4 control-label">Email</label>  
  <div class="col-md-4">
  <input  name="email" type="text" placeholder="Ingrese email" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Repetir email</label>  
  <div class="col-md-4">
  <input name="email2" type="text" placeholder="Repetir email" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Nombre De Usuario</label>  
  <div class="col-md-4">
  <input name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label>
  <div class="col-md-4">
    <input name="password" type="password" placeholder="password" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Repetir Password</label>
  <div class="col-md-4">
    <input name="password2" type="password" placeholder="password" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" ></label>
  <div class="col-md-8">
    <button id="" name="" class="btn btn-success">Enviar</button>
    <button id="" name="" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
