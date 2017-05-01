<form id="formulario"  class="form-horizontal" action="<?=base_url()?>index.php/asignar/asignar" method="post">
  <fieldset>
  <legend class="text-center">Asignar Rutas</legend >
    <div class="container">
        <div class="row">
            <div class='col-sm-6 col-md-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input id="fecha" name="fecha" type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
                <div class='col-sm-6 col-md-6'>
                    <div class="form-group">
                      <button onclick="return validar('fecha')" type="button" class="btn btn-success">Empezar</button>
                    </div>
                </div>            
        </div>
    </div>
  </fieldset>
</form>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datepicker();
            });
   function validar(fecha){
      fecha=document.getElementById(fecha);
      if (fecha.value==""){
        alert("no puede estar vacio");
        fecha.focus();
        return false;
      }  
      else{
        var enviar=document.getElementById("formulario");
        console.log(enviar);
        enviar.submit();
      }
    }
</script>


