<style> 
    #formulario{
      padding-top:15px;  
    }
</style>


<form id="formulario" class="form-horizontal" action="<?=base_url()?>index.php/rutas/ejecutar/<?=$operacion?>" method="post">
    <fieldset>
      <input type="hidden" name="id_ruta" value="<?=$ruta->id_rutas?>"> 
      <legend><?php echo ucwords($operacion)." "."Ruta"?></legend>
      <div class="form-group">
        <label class="col-md-4 control-label" for="nombre_ruta">Nombre De La Ruta</label>  
        <div class="col-md-4">
        <input name="nombre_ruta" type="text" placeholder="ingresar nombre" class="form-control input-md" value="<?=$ruta->nombre?>">
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="codig_ruta">Codigo Ruta</label>
      <div class="col-md-4">
        <input name="codigo_ruta" type="text" placeholder="Ingrese codigo" class="form-control input-md" value="<?=$ruta->codigo?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="enviar"></label>
      <div class="col-md-8">
        <button type="sumbit" class="btn btn-success">Enviar</button>
        <a  href="<?=base_url()?>index.php/rutas" class="btn btn-danger">Cancelar</a>
      </div>
</div>

  </fieldset>
</form>


