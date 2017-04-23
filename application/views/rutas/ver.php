<table class="table">
    <thead>
            <?php if ($this->session->userdata('name')=="admin" && $this->session->userdata('id_usuario')=="6"):?>         
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Acciones</th>
            <?php else :?>
             <th>Codigo</th>
            <th>Nombre</th>
            <th>Acciones</th>
            <?php endif?>
    </thead>
    <tbody>
        <?php foreach ($rutas as $ruta): ?>
            <tr>
                <?php if ($this->session->userdata('id_usuario')=="6") :?> 
                    <td style="width:15%"><?=$ruta->codigo?></td>
                    <td><?=$ruta->nombre?></td>
                    <td><?=$ruta->email?></td>            
                    <td <?php if ($ruta->id_usuario=='6'):?>{
                        style="width:20%"><a href="<?=base_url()?>index.php/rutas/editar/<?=$ruta->id_rutas?>" class="btn btn-warning" >Editar</a> <a href="<?=base_url()?>index.php/rutas/eliminar/<?=$ruta->id_rutas?>" class="btn btn-danger" >Eliminar</a>    
                        <?php else:?>{
                        style="width:20%"><a href="" class="btn btn-warning" disabled="disabled" >Editar</a> <a href="" disabled="disabled" class="btn btn-danger" >Eliminar</a>
                        <?php endif?>
                <?php else:?>
                    <td style="width:15%"><?=$ruta->codigo?></td>
                    <td><?=$ruta->nombre?></td>
                    <td style="width:20%"><a href="<?=base_url()?>index.php/rutas/editar/<?=$ruta->id_rutas?>" class="btn btn-warning" >Editar</a> <a href="<?=base_url()?>index.php/rutas/eliminar/<?=$ruta->id_rutas?>" class="btn btn-danger" >Eliminar</a></td>
                    </td>
               <?php endif?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>