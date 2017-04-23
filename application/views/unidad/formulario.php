<style> 
    #formulario{
      padding-top:15px;  
    }
</style>
  </fieldset>
</form>
<form class="form-horizontal" action="<?=base_url()?>index.php/unidad/ejecutar/<?=$operacion?>" method="post">
    <fieldset>
        <legend><?php echo ucwords($operacion)." "."Unidad"?></legend>
         <input type="hidden" name="id_unidad" value="<?=$unidad->id_unidad?>"> 

        <div class="form-group">
            <label class="col-md-4 control-label" for="marca">Marca</label>  
            <div class="col-md-4">
                <input id="marca" name="marca" type="text" placeholder="ingrese la marca" class="form-control input-md" value="<?=$unidad->marca?>">   
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="modelo">Modelo</label>  
            <div class="col-md-4">
                <input id="modelo" name="modelo" type="text" placeholder="ingrese el modelo" class="form-control input-md" value="<?=$unidad->modelo?>">        
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="patente">Patente</label>  
            <div class="col-md-4">
                <input id="patente" name="patente" type="text" placeholder="Ingrese la patente" class="form-control input-md" value="<?=$unidad->patente?>">            
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="enviar"></label>
            <div class="col-md-8">
                <button type="sumbit" name="enviar" class="btn btn-success">Enviar</button>
                <a href="<?=base_url()?>index.php/unidad" class="btn btn-danger">Cancelar</a>
            </div>
        </div>

    </fieldset>
</form>


